var SECTION_SCROLL_SPEED = 700; // Milliseconds
var lastSection = null; // Last section
var charts = {}; // Array that will be filled with all the charts

// Edit this array to make new charts for every section and slide
var initializeCharts = {
    q1: [
        {
            title: 'Test titel 1',
            settings: {
                keys: {
                    value: ['upload', 'download']
                }
            }
        },
    ]
};

$(document).ready(function() {

    // Section slides
    $("#wrapper").fullpage({
        scrollingSpeed: SECTION_SCROLL_SPEED,
        scrollOverflow: true,
        onLeave: function(index, nextIndex, direction) {
            lastSection = $(this);
        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction){
            lastSection = $(this);
        },
        afterLoad: function(anchorLink, index, slideAnchor, slideIndex) {
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
                    mimeType: 'json',
                    type: 'bar',
                },
                grid: {
                    y: {
                        lines: [{value:0}]
                    }
                }
            };

            // Extend the 'data' array
            $.extend(chart_data['data'], chart['settings']);

            charts[chart_id] = c3.generate(chart_data);
        }

    });

});

// Calls animate.css animations again
function animate(slide) {

    // Previous slide
    if(lastSection != null) {
        var previousSlide = lastSection;
        var previousAnimated = previousSlide.find('.animated');
        var previousAnimations = previousAnimated.attr('data-animations');

        previousAnimated.hide().removeClass(previousAnimations);
    }

    // New slide
    var animated = slide.find('.animated');
    var animations = animated.attr('data-animations');

    animated.show().addClass(animations);

}