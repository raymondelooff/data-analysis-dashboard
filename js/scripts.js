var SECTION_SCROLL_SPEED = 700; // Milliseconds
var lastView = null; // Last view
var charts_data_array = {}; // Array that will be filled with all the charts
var charts_array = {}; // Array that will be filled with all the charts and can be modified

// Function for calculating linear regression
function linearRegression(y,x) {
    var lr = {};
    var n = y.length;
    var sum_x = 0;
    var sum_y = 0;
    var sum_xy = 0;
    var sum_xx = 0;
    var sum_yy = 0;

    for (var i = 0; i < y.length; i++) {

        sum_x += x[i];
        sum_y += y[i];
        sum_xy += (x[i]*y[i]);
        sum_xx += (x[i]*x[i]);
        sum_yy += (y[i]*y[i]);
    }

    lr['slope'] = (n * sum_xy - sum_x * sum_y) / (n*sum_xx - sum_x * sum_x);
    lr['intercept'] = (sum_y - lr.slope * sum_x)/n;
    lr['r2'] = Math.pow((n*sum_xy - sum_x*sum_y)/Math.sqrt((n*sum_xx-sum_x*sum_x)*(n*sum_yy-sum_y*sum_y)),2);

    return lr;
}

// Calls animate.css animations again
function animate(view) {

    // Previous slide
    if(lastView != null) {
        var previousView = lastView;
        var previousAnimated = previousView.find('.animated');
        var previousAnimations = previousAnimated.attr('data-animations');

        previousAnimated.hide().removeClass(previousAnimations);
    }

    // New slide
    if(view.find('.slide').length > 0) {
        var animated = view.find('.slide.active .animated');
    }
    else {
        var animated = view.find('.animated');
    }
    $.each(animated, function() {
        var animations = $(this).attr('data-animations');
        $(this).show().addClass(animations);
    });

}

// Get JSON data when calculating moving average or linear regression
function trendanalysis(chart_id, chart_data, chart) {
    $.get(chart_data['data']['url'], function (json) {

        // Values
        var data_keys = json['x'];
        var data_values = json[chart['moving_average_key']];

        // Moving average
        if (chart['moving_average_key'] != undefined) {

            var averages = ["3-staps voortschrijdend gemiddelde"];

            $.each(data_keys, function (index, x) {

                // Store latest values
                var first_value = null;
                var second_value = null;
                var third_value = null;

                // Set values
                if (index > 1) {
                    first_value = data_values[index - 2];
                    second_value = data_values[index - 1];
                    third_value = d3.round((first_value + second_value + data_values[index]) / 3, 1);
                }

                // Store value in array
                averages.push(third_value);

            });

            // Push averages to chart
            charts_array[chart_id].load({
                columns: [
                    averages
                ]
            });
        }

        // Linear regression
        if (chart['linear_regression'] == true) {

            var linear_regression = linearRegression(data_values, data_keys);
            var points = ["Linear"];

            $.each(data_keys, function (index, x) {

                var y = (x * linear_regression['slope'] + linear_regression['intercept']);
                points.push(y);

            });

            // Push points to chart
            charts_array[chart_id].load({
                columns: [
                    points
                ]
            });

        }
    });
}

$(document).ready(function() {

    // Section slides
    $("#wrapper").fullpage({
        scrollingSpeed: SECTION_SCROLL_SPEED,
        scrollOverflow: true,
        navigation: true,
        onLeave: function(index, nextIndex, direction) {
            lastView = $(this);
        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction){
            lastView = $(this);
        },
        afterLoad: function(anchorLink, index) {
            animate($(this));
        },
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
            animate($(this));
        }
    });

    // Initialize charts
    $.each(initializeCharts, function(section, charts) {

        for(var i = 0; i < charts.length; i++) {
            var chart = charts[i];
            var chart_id = section + '-c' + (i + 1);
            var chart_data = {
                bindto: '#chart-' + chart_id,
                data: {
                    url: '/data/chart-' + chart_id + '.json',
                    mimeType: 'json'
                },
                axis: {
                    x: {
                        type: 'category'
                    }
                },
                grid: {
                    y: {
                        lines: [{value:0}]
                    }
                }
            };

            // Extend the chart array with chart specific settings
            $.extend(chart_data['data'], chart['data']);
            $.extend(chart_data['axis'], chart['axis']);
            $.extend(chart_data, chart['other']);

            // Get the chart height
            var chart_height = $(chart_data['bindto']).attr('data-chart-height');

            if(chart_height != undefined) {
                if(chart_data['size'] == undefined) {
                    chart_data['size'] = {};
                }

                chart_data['size']['height'] = parseInt(chart_height);
            }

            charts_array[chart_id] = c3.generate(chart_data);
            charts_data_array[chart_id] = chart_data;

            // Call trend analysis function
            if(chart['moving_average_key'] != undefined || chart['linear_regression'] == true) {
                trendanalysis(chart_id, chart_data, chart);
            }
        }

    });

    $(".chart-toggle").on('change', function() {
        var checked = $(this).prop('checked');
        var chart_id = $(this).attr('data-chart-id');
        var chart_data = charts_data_array[chart_id];
        var chart = charts_array[chart_id];

        if(checked) {
            chart.transform('bar');
            chart.groups(chart_data['data']['groups']);
        } else {
            chart.transform('line');
            chart.groups([]);
        }
    });

    // Set chart container height
    $.each($('.chart-container'), function() {
        $(this).height($(this).actual('height'));
    });

});