var SECTION_SCROLL_SPEED = 700; // Milliseconds
var lastView = null; // Last view
var charts_data_array = {}; // Array that will be filled with all the charts
var charts_array = {}; // Array that will be filled with all the charts and can be modified

// Edit this array to make new charts for every section and slide
var initializeCharts = {
    q1: [
        { // Cultuurbezoek per leeftijdscategorie #1
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Bioscoop", "Concert", "Museum", "Toneel"]
                ]
            },
            axis: {
                y : {
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                size: {
                    height: 550
                }
            }
        },
        { // Cultuurbezoek per leeftijdscategorie #2
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Bioscoop", "Concert", "Museum", "Toneel"]
                ]
            },
            axis: {
                y : {
                    min: 0,
                    padding: {
                        bottom: 0
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                size: {
                    height: 550
                }
            }
        },
        { // Cafebezoeken per leeftijdscategorie in de tijd
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["18-25", "25-35", "35-45", "45-55", "55-65", "65-75", "75+"]
                ]
            },
            axis: {
                y : {
                    min: 0,
                    padding: {
                        bottom: 0
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                size: {
                    height: 550
                }
            }
        }
    ],
    q2: [

    ]
};

$(document).ready(function() {

    // Section slides
    $("#wrapper").fullpage({
        scrollingSpeed: SECTION_SCROLL_SPEED,
        scrollOverflow: true,
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

            charts_array[chart_id] = c3.generate(chart_data);
            charts_data_array[chart_id] = chart_data;
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
    })

});

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