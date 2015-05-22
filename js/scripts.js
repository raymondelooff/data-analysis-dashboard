var SECTION_SCROLL_SPEED = 700; // Milliseconds
var lastView = null; // Last view
var charts = {}; // Array that will be filled with all the charts

// Edit this array to make new charts for every section and slide
var initializeCharts = {
    q1: [
        {
            title: 'Vrijetijdsbesteding per leeftijdscategorie',
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Bioscoop", "Concert", "Museum", "Toneel"]
                ]
            },
            settings: {
                size: {
                    height: 550
                }
            }
        },
        {
            title: 'Test titel 2',
            settings: {
                keys: {
                    value: ['upload', 'download']
                }
            }
        }
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

            // Extend the chart array
            $.extend(chart_data['data'], chart['data']);
            $.extend(chart_data, chart['settings']);

            charts[chart_id] = c3.generate(chart_data);
        }

    });

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
    var animations = animated.attr('data-animations');
    animated.show().addClass(animations);

}