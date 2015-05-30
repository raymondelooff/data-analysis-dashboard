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

            }
        },
        { // Cafebezoeken per leeftijdscategorie over de jaren #1
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

            }
        },
        { // Cafebezoeken per leeftijdscategorie over de jaren #2
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

            }
        },
        { // Restaurantbezoeken per leeftijdscategorie over de jaren #1
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

            }
        },
        { // Restaurantbezoeken per leeftijdscategorie over de jaren #2
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

            }
        },
        { // Dans/disco avond bezoeken per leeftijdscategorie over de jaren #1
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

            }
        },
        { // Dans/disco avond bezoeken per leeftijdscategorie over de jaren #2
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

            }
        },
        { // Gezellige middag of avond bezoeken per leeftijdscategorie over de jaren #1
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

            }
        },
        { // Gezellige middag of avond bezoeken per leeftijdscategorie over de jaren #2
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

            }
        },
        { // Tevreden vrijetijdbesteding per leeftijdscategorie
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Niet zo tevreden", "Tamelijk tevreden", "Tevreden", "Zeer tevreden", "Buitengewoon tevreden"]
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

            }
        },
        { // Vrijetijdbesteding per leeftijdscategorie
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Cafebezoek", "Restaurantbezoek", "Dans-, disco-avond", "Gezellige middag of avond"]
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

            }
        }

    ],

    q2: [
        { // Cultuurbezoek per opleidingsniveau #1
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

            }
        },
        { // Cultuurbezoek per opleidingsniveau #2
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

            }
        },
        { // Cafebezoeken per opleidingsniveau over de jaren #1
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Cafebezoeken per opleidingsniveau over de jaren #2
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Restaurantbezoeken per opleidingsniveau over de jaren #1
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Restaurantbezoeken per opleidingsniveau over de jaren #2
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Dans/disco avond bezoeken per opleidingsniveau over de jaren #1
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Dans/disco avond bezoeken per opleidingsniveau over de jaren #2
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Gezellige middag of avond bezoeken per opleidingsniveau over de jaren #1
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Gezellige middag of avond bezoeken per opleidingsniveau over de jaren #2
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Basisonderwijs", "VBO", "MAVO", "HAVO, MBO, VWO", "HBO, Universiteit"]
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

            }
        },
        { // Tevreden vrijetijdbesteding per opleidingsniveau
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Niet zo tevreden", "Tamelijk tevreden", "Tevreden", "Zeer tevreden", "Buitengewoon tevreden"]
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

            }
        },
        { // Vrijetijdbesteding per opleidingsniveau
            data: {
                type: 'bar',
                x: 'x',
                groups: [
                    ["Cafebezoek", "Restaurantbezoek", "Dans-, disco-avond", "Gezellige middag of avond"]
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

            }
        }
    ],

    q3: [
        { // Tevredenheid 'Niet zo tevreden' per jaar
            data: {
                type: 'line',
                x: 'x'
            },
            axis: {
                y : {
                    padding: {
                        top: 300,
                        bottom: 300
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                tooltip: {
                    format: {
                        //value: d3.format('.2f')
                    }
                }
            },
            moving_average_key: "Tevredenheid",
            linear_regression: true
        },
        { // Tevredenheid 'Tamelijk tevreden' per jaar
            data: {
                type: 'line',
                x: 'x'
            },
            axis: {
                y : {
                    padding: {
                        top: 300,
                        bottom: 300
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                tooltip: {
                    format: {
                        //value: d3.format('.2f')
                    }
                }
            },
            moving_average_key: "Tevredenheid",
            linear_regression: true
        },
        { // Tevredenheid 'Tevreden' per jaar
            data: {
                type: 'line',
                x: 'x'
            },
            axis: {
                y : {
                    padding: {
                        top: 300,
                        bottom: 300
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                tooltip: {
                    format: {
                        //value: d3.format('.2f')
                    }
                }
            },
            moving_average_key: "Tevredenheid",
            linear_regression: true
        },
        { // Tevredenheid 'Zeer tevreden' per jaar
            data: {
                type: 'line',
                x: 'x'
            },
            axis: {
                y : {
                    padding: {
                        top: 300,
                        bottom: 300
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                tooltip: {
                    format: {
                        //value: d3.format('.2f')
                    }
                }
            },
            moving_average_key: "Tevredenheid",
            linear_regression: true
        },
        { // Tevredenheid 'Buitengewoon tevreden' per jaar
            data: {
                type: 'line',
                x: 'x'
            },
            axis: {
                y : {
                    padding: {
                        top: 300,
                        bottom: 300
                    },
                    tick: {
                        format: function (d) { return d + "%"; }
                    }
                }
            },
            other: {
                tooltip: {
                    format: {
                        //value: d3.format('.2f')
                    }
                }
            },
            moving_average_key: "Tevredenheid",
            linear_regression: true
        }
    ]
};