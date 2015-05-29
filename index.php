<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Too many icons, but needed because awesome -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Data Analyse</title>

    <!-- Bootstrap -->
    <link href="bower_components/c3/c3.min.css" rel="stylesheet">
    <link href="bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:700|Hind:400,600,700" rel="stylesheet">
    <link href="css/screen.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <header class="section" data-anchor="section-1">
        <div class="container animated" data-animations="fadeInUp">
            <img src="images/hz-logo.png" alt="HZ Logo">
            <h1>Data Analyse</h1>
            <p class="intro">CU08662 Data Analyse 1 - HZ University of Applied Sciences</p>
        </div>
    </header>

    <section class="section question" data-anchor="section-2">
        <div class="container animated" data-animations="bounceInUp">
            <h1>Is er een verband tussen leeftijd en vrijetijdsbesteding?</h1>
            <p></p>
        </div>
    </section>

    <section class="section" data-anchor="section-3">
        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-1">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-5">
                        <h2>Cultuurbezoeken per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de cultuurbezoeken gegroepeerd op leeftijdscategorie.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minimaal 1 keer per maand</strong> de gegeven activiteit onderneemt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>Bioscoop</th>
                                    <th>Concert</th>
                                    <th>Museum</th>
                                    <th>Toneel</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>33%</td>
                                    <td>7%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>17%</td>
                                    <td>5%</td>
                                    <td>0%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>8%</td>
                                    <td>4%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>6%</td>
                                    <td>4%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>1%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>0%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c1" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c1" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c1" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <h2>Cultuurbezoeken per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u net als op de vorige slide, de cultuurbezoeken gegroepeerd op leeftijdscategorie.
                            Echter is hier gekeken naar, de grootte van de leeftijdsgroep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> de gegeven activiteit onderneemt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>Bioscoop</th>
                                    <th>Concert</th>
                                    <th>Museum</th>
                                    <th>Toneel</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>36%</td>
                                    <td>12%</td>
                                    <td>9%</td>
                                    <td>7%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>29%</td>
                                    <td>13%</td>
                                    <td>10%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>24%</td>
                                    <td>13%</td>
                                    <td>11%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>17%</td>
                                    <td>13%</td>
                                    <td>16%</td>
                                    <td>7%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>5%</td>
                                    <td>15%</td>
                                    <td>18%</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>4%</td>
                                    <td>12%</td>
                                    <td>19%</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>2%</td>
                                    <td>6%</td>
                                    <td>9%</td>
                                    <td>2%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c2" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c2" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c2" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-3">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Caf&eacute;bezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de caf&eacute;bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minimaal 1 keer per week</strong> een caf&eacute; bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                    <th>'05</th>
                                    <th>'06</th>
                                    <th>'07</th>
                                    <th>'08</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>40%</td>
                                    <td>43%</td>
                                    <td>43%</td>
                                    <td>42%</td>
                                    <td>42%</td>
                                    <td>39%</td>
                                    <td>37%</td>
                                    <td>34%</td>
                                    <td>31%</td>
                                    <td>34%</td>
                                    <td>35%</td>
                                    <td>32%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>14%</td>
                                    <td>14%</td>
                                    <td>13%</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>8%</td>
                                    <td>9%</td>
                                    <td>8%</td>
                                    <td>9%</td>
                                    <td>9%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>6%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>5%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>7%</td>
                                    <td>6%</td>
                                    <td>7%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c3" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c3" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c3" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-4">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Caf&eacute;bezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de caf&eacute;bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>1 tot 3 keer per maand</strong> een caf&eacute; bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                    <th>'05</th>
                                    <th>'06</th>
                                    <th>'07</th>
                                    <th>'08</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>28%</td>
                                    <td>27%</td>
                                    <td>26%</td>
                                    <td>29%</td>
                                    <td>31%</td>
                                    <td>31%</td>
                                    <td>33%</td>
                                    <td>33%</td>
                                    <td>36%</td>
                                    <td>33%</td>
                                    <td>36%</td>
                                    <td>38%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>24%</td>
                                    <td>24%</td>
                                    <td>25%</td>
                                    <td>26%</td>
                                    <td>27%</td>
                                    <td>26%</td>
                                    <td>27%</td>
                                    <td>28%</td>
                                    <td>27%</td>
                                    <td>29%</td>
                                    <td>29%</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>14%</td>
                                    <td>14%</td>
                                    <td>15%</td>
                                    <td>14%</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>11%</td>
                                    <td>12%</td>
                                    <td>13%</td>
                                    <td>12%</td>
                                    <td>13%</td>
                                    <td>11%</td>
                                    <td>14%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>4%</td>
                                    <td>8%</td>
                                    <td>9%</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c4" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c4" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c4" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-5">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Restaurantbezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de restaurantbezoekenbezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minstens 1 keer per maand</strong> een restaurant bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>33%</td>
                                    <td>38%</td>
                                    <td>40%</td>
                                    <td>39%</td>
                                    <td>39%</td>
                                    <td>35%</td>
                                    <td>37%</td>
                                    <td>35%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>36%</td>
                                    <td>41%</td>
                                    <td>45%</td>
                                    <td>46%</td>
                                    <td>48%</td>
                                    <td>48%</td>
                                    <td>43%</td>
                                    <td>40%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>28%</td>
                                    <td>32%</td>
                                    <td>33%</td>
                                    <td>34%</td>
                                    <td>33%</td>
                                    <td>36%</td>
                                    <td>30%</td>
                                    <td>32%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>31%</td>
                                    <td>37%</td>
                                    <td>37%</td>
                                    <td>41%</td>
                                    <td>38%</td>
                                    <td>39%</td>
                                    <td>30%</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>29%</td>
                                    <td>27%</td>
                                    <td>33%</td>
                                    <td>30%</td>
                                    <td>33%</td>
                                    <td>34%</td>
                                    <td>31%</td>
                                    <td>32%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>24%</td>
                                    <td>24%</td>
                                    <td>21%</td>
                                    <td>28%</td>
                                    <td>24%</td>
                                    <td>26%</td>
                                    <td>20%</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>20%</td>
                                    <td>14%</td>
                                    <td>20%</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>18%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c5" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c5" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c5" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-6">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Restaurantbezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de restaurantbezoekenbezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> een restaurant bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>40%</td>
                                    <td>39%</td>
                                    <td>40%</td>
                                    <td>42%</td>
                                    <td>38%</td>
                                    <td>41%</td>
                                    <td>35%</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>39%</td>
                                    <td>39%</td>
                                    <td>34%</td>
                                    <td>38%</td>
                                    <td>32%</td>
                                    <td>33%</td>
                                    <td>31%</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>44%</td>
                                    <td>40%</td>
                                    <td>42%</td>
                                    <td>40%</td>
                                    <td>38%</td>
                                    <td>35%</td>
                                    <td>38%</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>40%</td>
                                    <td>39%</td>
                                    <td>37%</td>
                                    <td>39%</td>
                                    <td>35%</td>
                                    <td>35%</td>
                                    <td>40%</td>
                                    <td>32%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>38%</td>
                                    <td>39%</td>
                                    <td>37%</td>
                                    <td>40%</td>
                                    <td>34%</td>
                                    <td>34%</td>
                                    <td>34%</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>30%</td>
                                    <td>28%</td>
                                    <td>33%</td>
                                    <td>34%</td>
                                    <td>30%</td>
                                    <td>29%</td>
                                    <td>36%</td>
                                    <td>29%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>26%</td>
                                    <td>23%</td>
                                    <td>27%</td>
                                    <td>28%</td>
                                    <td>27%</td>
                                    <td>23%</td>
                                    <td>19%</td>
                                    <td>21%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c6" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c6" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c6" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-7">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Dans/disco avond bezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de dans/disco avond bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minstens 1 keer per maand</strong> een dans/disco avond bijwoont.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>58%</td>
                                    <td>56%</td>
                                    <td>56%</td>
                                    <td>54%</td>
                                    <td>60%</td>
                                    <td>57%</td>
                                    <td>49%</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>15%</td>
                                    <td>16%</td>
                                    <td>20%</td>
                                    <td>19%</td>
                                    <td>17%</td>
                                    <td>20%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>5%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>3%</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>4%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>3%</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>1%</td>
                                    <td>0%</td>
                                    <td>1%</td>
                                    <td>3%</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c7" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c7" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c7" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-8">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Dans/disco avond bezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de dans/disco avond bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> een dans/disco avond bijwoont.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>13%</td>
                                    <td>15%</td>
                                    <td>12%</td>
                                    <td>14%</td>
                                    <td>12%</td>
                                    <td>15%</td>
                                    <td>16%</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>15%</td>
                                    <td>13%</td>
                                    <td>14%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>12%</td>
                                    <td>14%</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>7%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                    <td>4%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>1%</td>
                                    <td>0%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>1%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>-</td>
                                    <td>0%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                    <td>0%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>0%</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>0%</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>1%</td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c8" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c8" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c8" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-9">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Gezellige middag of avond bezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de gezellige middag of avond bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minstens 1 keer per maand</strong> een gezellige middag of avond bijwoont.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>57%</td>
                                    <td>55%</td>
                                    <td>61%</td>
                                    <td>60%</td>
                                    <td>63%</td>
                                    <td>65%</td>
                                    <td>65%</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>45%</td>
                                    <td>44%</td>
                                    <td>47%</td>
                                    <td>50%</td>
                                    <td>51%</td>
                                    <td>53%</td>
                                    <td>56%</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>39%</td>
                                    <td>41%</td>
                                    <td>39%</td>
                                    <td>35%</td>
                                    <td>40%</td>
                                    <td>41%</td>
                                    <td>41%</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>35%</td>
                                    <td>32%</td>
                                    <td>35%</td>
                                    <td>36%</td>
                                    <td>34%</td>
                                    <td>41%</td>
                                    <td>40%</td>
                                    <td>43%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>32%</td>
                                    <td>32%</td>
                                    <td>27%</td>
                                    <td>31%</td>
                                    <td>30%</td>
                                    <td>33%</td>
                                    <td>33%</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>31%</td>
                                    <td>27%</td>
                                    <td>30%</td>
                                    <td>32%</td>
                                    <td>33%</td>
                                    <td>34%</td>
                                    <td>38%</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>34%</td>
                                    <td>30%</td>
                                    <td>32%</td>
                                    <td>30%</td>
                                    <td>32%</td>
                                    <td>34%</td>
                                    <td>33%</td>
                                    <td>41%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c9" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c9" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c9" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-10">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Gezellige middag of avond bezoeken per leeftijdscategorie over de jaren</h2>
                        <p>
                            Hier ziet u de gezellige middag of avond bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> een gezellige middag of avond bijwoont.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'04</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>15%</td>
                                    <td>14%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>9%</td>
                                    <td>12%</td>
                                    <td>11%</td>
                                    <td>11%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>17%</td>
                                    <td>20%</td>
                                    <td>19%</td>
                                    <td>17%</td>
                                    <td>14%</td>
                                    <td>12%</td>
                                    <td>14%</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>20%</td>
                                    <td>20%</td>
                                    <td>25%</td>
                                    <td>23%</td>
                                    <td>19%</td>
                                    <td>19%</td>
                                    <td>19%</td>
                                    <td>19%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>21%</td>
                                    <td>22%</td>
                                    <td>18%</td>
                                    <td>20%</td>
                                    <td>18%</td>
                                    <td>18%</td>
                                    <td>19%</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>22%</td>
                                    <td>18%</td>
                                    <td>16%</td>
                                    <td>20%</td>
                                    <td>16%</td>
                                    <td>19%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>17%</td>
                                    <td>19%</td>
                                    <td>16%</td>
                                    <td>20%</td>
                                    <td>12%</td>
                                    <td>14%</td>
                                    <td>16%</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>14%</td>
                                    <td>10%</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>13%</td>
                                    <td>14%</td>
                                    <td>14%</td>
                                    <td>13%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c10" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c10" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c10" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-11">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-5">
                        <h2>Tevredenheid vrijetijdbesteding per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de tevredenheid van vrijetijdsbesteding gegroepeerd op leeftijdscategorie.
                            De grootte van de leeftijdsgroep in procenten hoe tevreden men is over vrijetijdsbesteding.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>Buitengewoon tevreden</th>
                                    <th>Zeer tevreden</th>
                                    <th>Tevreden</th>
                                    <th>Tamelijk tevreden</th>
                                    <th>Niet zo tevreden</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>7%</td>
                                    <td>35%</td>
                                    <td>46%</td>
                                    <td>9%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>5%</td>
                                    <td>26%</td>
                                    <td>50%</td>
                                    <td>14%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>5%</td>
                                    <td>25%</td>
                                    <td>50%</td>
                                    <td>13%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>7%</td>
                                    <td>29%</td>
                                    <td>47%</td>
                                    <td>13%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>8%</td>
                                    <td>30%</td>
                                    <td>49%</td>
                                    <td>9%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>8%</td>
                                    <td>31%</td>
                                    <td>50%</td>
                                    <td>7%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>6%</td>
                                    <td>29%</td>
                                    <td>51%</td>
                                    <td>9%</td>
                                    <td>5%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c11" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c11" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c11" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-12">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-5">
                        <h2>Vrijetijdsbesteding per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de vrijetijdsbesteding van het jaar 2003 gegroepeerd op leeftijdscategorie.
                            De grootte van de leeftijdsgroep in procenten wat <strong>minimaal 1 keer per maand</strong> de gegeven activiteit onderneemt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Leeftijd</th>
                                    <th>Caf&eacute;bezoek</th>
                                    <th>Restaurantbezoek</th>
                                    <th>Dans-, disco-avond</th>
                                    <th>Gezellige middag of avond</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>18-25</td>
                                    <td>33%</td>
                                    <td>7%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>25-35</td>
                                    <td>17%</td>
                                    <td>5%</td>
                                    <td>0%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>35-45</td>
                                    <td>8%</td>
                                    <td>4%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>45-55</td>
                                    <td>6%</td>
                                    <td>4%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>55-65</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>65-75</td>
                                    <td>1%</td>
                                    <td>3%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>75+</td>
                                    <td>0%</td>
                                    <td>2%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q1-c12" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q1-c12" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q1-c12" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section question" data-anchor="section-4">
        <div class="container animated" data-animations="bounceInUp">
            <h1>Is er een verband tussen opleidingsniveau's en vrijetijdsbesteding?</h1>
            <p></p>
        </div>
    </section>

    <section class="section" data-anchor="section-5">

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-1">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-5">
                        <h2>Cultuurbezoeken per opleidingsniveau</h2>
                        <p>
                            Hier ziet u de cultuurbezoeken gegroepeerd op opleidingsniveau.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minimaal 1 keer per maand</strong> de gegeven activiteit onderneemt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>Bioscoop</th>
                                    <th>Concert</th>
                                    <th>Museum</th>
                                    <th>Toneel</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>6%</td>
                                    <td>2%</td>
                                    <td>0%</td>
                                    <td>0%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>6%</td>
                                    <td>3%</td>
                                    <td>0%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>10%</td>
                                    <td>3%</td>
                                    <td>0%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>12%</td>
                                    <td>4%</td>
                                    <td>1%</td>
                                    <td>1%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>16%</td>
                                    <td>8%</td>
                                    <td>2%</td>
                                    <td>2%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c1" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c1" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c1" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <h2>Cultuurbezoeken per opleidingsniveau</h2>
                        <p>
                            Hier ziet u net als op de vorige slide, de cultuurbezoeken gegroepeerd op opleidingsniveau.
                            Echter is hier gekeken naar, de grootte van de opleidingsniveau-groep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> de gegeven activiteit onderneemt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>Bioscoop</th>
                                    <th>Concert</th>
                                    <th>Museum</th>
                                    <th>Toneel</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>13%</td>
                                    <td>5%</td>
                                    <td>6%</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>14%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>24%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>20%</td>
                                    <td>12%</td>
                                    <td>12%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>29%</td>
                                    <td>23%</td>
                                    <td>25%</td>
                                    <td>14%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c2" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c2" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c2" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-3">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Caf&eacute;bezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de caf&eacute;bezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minimaal 1 keer per week</strong> een caf&eacute; bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'05</th>
                                    <th>'06</th>
                                    <th>'07</th>
                                    <th>'08</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>8%</td>
                                    <td>9%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>6%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>12%</td>
                                    <td>13%</td>
                                    <td>12%</td>
                                    <td>12%</td>
                                    <td>12%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                    <td>11%</td>
                                    <td>11%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>15%</td>
                                    <td>19%</td>
                                    <td>17%</td>
                                    <td>14%</td>
                                    <td>15%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>12%</td>
                                    <td>12%</td>
                                    <td>9%</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>15%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>15%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                    <td>9%</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>9%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c3" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c3" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c3" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-4">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Caf&eacute;bezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de caf&eacute;bezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>1 tot 3 keer per maand</strong> een caf&eacute; bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                    <th>'05</th>
                                    <th>'06</th>
                                    <th>'07</th>
                                    <th>'08</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>9%</td>
                                    <td>7%</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>12%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                    <td>12%</td>
                                    <td>10%</td>
                                    <td>11%</td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>16%</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>15%</td>
                                    <td>16%</td>
                                    <td>21%</td>
                                    <td>19%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>19%</td>
                                    <td>18%</td>
                                    <td>18%</td>
                                    <td>19%</td>
                                    <td>18%</td>
                                    <td>19%</td>
                                    <td>19%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>21%</td>
                                    <td>21%</td>
                                    <td>22%</td>
                                    <td>22%</td>
                                    <td>24%</td>
                                    <td>23%</td>
                                    <td>24%</td>
                                    <td>22%</td>
                                    <td>26%</td>
                                    <td>24%</td>
                                    <td>26%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c4" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c4" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c4" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-5">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Restaurantbezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de restaurantbezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minimaal 1 keer per maand</strong> een restaurant bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>17%</td>
                                    <td>18%</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>21%</td>
                                    <td>26%</td>
                                    <td>26%</td>
                                    <td>24%</td>
                                    <td>27%</td>
                                    <td>27%</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>27%</td>
                                    <td>31%</td>
                                    <td>30%</td>
                                    <td>31%</td>
                                    <td>33%</td>
                                    <td>31%</td>
                                    <td>27%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>33%</td>
                                    <td>36%</td>
                                    <td>38%</td>
                                    <td>40%</td>
                                    <td>39%</td>
                                    <td>37%</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>45%</td>
                                    <td>50%</td>
                                    <td>54%</td>
                                    <td>56%</td>
                                    <td>54%</td>
                                    <td>55%</td>
                                    <td>46%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c5" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c5" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c5" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-6">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Restaurantbezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de restaurantbezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> een restaurant bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>29%</td>
                                    <td>27%</td>
                                    <td>30%</td>
                                    <td>35%</td>
                                    <td>31%</td>
                                    <td>24%</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>37%</td>
                                    <td>36%</td>
                                    <td>37%</td>
                                    <td>40%</td>
                                    <td>33%</td>
                                    <td>31%</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>38%</td>
                                    <td>39%</td>
                                    <td>44%</td>
                                    <td>45%</td>
                                    <td>36%</td>
                                    <td>42%</td>
                                    <td>38%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>43%</td>
                                    <td>42%</td>
                                    <td>39%</td>
                                    <td>40%</td>
                                    <td>36%</td>
                                    <td>39%</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>41%</td>
                                    <td>38%</td>
                                    <td>36%</td>
                                    <td>34%</td>
                                    <td>35%</td>
                                    <td>31%</td>
                                    <td>37%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c6" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c6" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c6" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-7">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Dans/disco avond bezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de dans/disco avond bezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minimaal 1 keer per maand</strong> een dans/disco avond bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>9%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                    <td>12%</td>
                                    <td>11%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>13%</td>
                                    <td>12%</td>
                                    <td>14%</td>
                                    <td>11%</td>
                                    <td>12%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>19%</td>
                                    <td>22%</td>
                                    <td>24%</td>
                                    <td>22%</td>
                                    <td>20%</td>
                                    <td>21%</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>11%</td>
                                    <td>10%</td>
                                    <td>11%</td>
                                    <td>13%</td>
                                    <td>10%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c7" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c7" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c7" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-8">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Dans/disco avond bezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de dans/disco avond bezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> een dans/disco avond bezoekt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>4%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                    <td>7%</td>
                                    <td>5%</td>
                                    <td>3%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>8%</td>
                                    <td>11%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>9%</td>
                                    <td>8%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>6%</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>9%</td>
                                    <td>8%</td>
                                    <td>9%</td>
                                    <td>8%</td>
                                    <td>6%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c8" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c8" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c8" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-9">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Gezellige middag of avond bezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de gezellige middag of avond bezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minimaal 1 keer per maand</strong> een gezellige middag of avond bijwoont.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>35%</td>
                                    <td>32%</td>
                                    <td>31%</td>
                                    <td>34%</td>
                                    <td>36%</td>
                                    <td>38%</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>38%</td>
                                    <td>33%</td>
                                    <td>38%</td>
                                    <td>36%</td>
                                    <td>36%</td>
                                    <td>42%</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>44%</td>
                                    <td>43%</td>
                                    <td>46%</td>
                                    <td>44%</td>
                                    <td>43%</td>
                                    <td>50%</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>41%</td>
                                    <td>43%</td>
                                    <td>43%</td>
                                    <td>45%</td>
                                    <td>46%</td>
                                    <td>47%</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>44%</td>
                                    <td>40%</td>
                                    <td>40%</td>
                                    <td>39%</td>
                                    <td>45%</td>
                                    <td>44%</td>
                                    <td>45%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c9" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c9" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c9" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-10">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-4">
                        <h2>Gezellige middag of avond bezoeken per opleidingsniveau over de jaren</h2>
                        <p>
                            Hier ziet u de gezellige middag of avond bezoeken per opleidingsniveau gegroepeerd op jaar.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minstens 3 keer per jaar, maar minder dan 1 keer per maand</strong> een gezellige middag of avond bijwoont.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>'97</th>
                                    <th>'98</th>
                                    <th>'99</th>
                                    <th>'00</th>
                                    <th>'01</th>
                                    <th>'02</th>
                                    <th>'03</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>17%</td>
                                    <td>18%</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>10%</td>
                                    <td>14%</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>17%</td>
                                    <td>23%</td>
                                    <td>20%</td>
                                    <td>18%</td>
                                    <td>18%</td>
                                    <td>16%</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>19%</td>
                                    <td>17%</td>
                                    <td>18%</td>
                                    <td>20%</td>
                                    <td>17%</td>
                                    <td>20%</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>20%</td>
                                    <td>18%</td>
                                    <td>20%</td>
                                    <td>20%</td>
                                    <td>16%</td>
                                    <td>17%</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>16%</td>
                                    <td>16%</td>
                                    <td>19%</td>
                                    <td>18%</td>
                                    <td>17%</td>
                                    <td>15%</td>
                                    <td>16%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c10" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c10" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c10" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-11">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-5">
                        <h2>Tevredenheid opleidingsniveau per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de tevredenheid van vrijetijdsbesteding gegroepeerd op opleidingsniveau.
                            De grootte van de opleidingsniveau-groep in procenten hoe tevreden men is over vrijetijdsbesteding.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>Buitengewoon tevreden</th>
                                    <th>Zeer tevreden</th>
                                    <th>Tevreden</th>
                                    <th>Tamelijk tevreden</th>
                                    <th>Niet zo tevreden</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>5%</td>
                                    <td>27%</td>
                                    <td>53%</td>
                                    <td>10%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>7%</td>
                                    <td>29%</td>
                                    <td>51%</td>
                                    <td>10%</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>8%</td>
                                    <td>32%</td>
                                    <td>45%</td>
                                    <td>10%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>7%</td>
                                    <td>28%</td>
                                    <td>49%</td>
                                    <td>12%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>6%</td>
                                    <td>32%</td>
                                    <td>45%</td>
                                    <td>13%</td>
                                    <td>4%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c11" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c11" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c11" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-5-slide-12">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-5">
                        <h2>Vrijetijdsbesteding per opleidingsniveau</h2>
                        <p>
                            Hier ziet u de vrijetijdsbesteding van het jaar 2003 gegroepeerd op opleidingsniveau.
                            De grootte van de opleidingsniveau-groep in procenten wat <strong>minimaal 1 keer per maand</strong> de gegeven activiteit onderneemt.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Opleiding</th>
                                    <th>Caf&eacute;bezoek</th>
                                    <th>Restaurantbezoek</th>
                                    <th>Dans-, disco-avond</th>
                                    <th>Gezellige middag of avond</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basisonderwijs</td>
                                    <td>8%</td>
                                    <td>14%</td>
                                    <td>11%</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>VBO</td>
                                    <td>10%</td>
                                    <td>23%</td>
                                    <td>10%</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>MAVO</td>
                                    <td>17%</td>
                                    <td>27%</td>
                                    <td>18%</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>HAVO, MBO, VWO</td>
                                    <td>18%</td>
                                    <td>34%</td>
                                    <td>14%</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>HBO, Universiteit</td>
                                    <td>24%</td>
                                    <td>46%</td>
                                    <td>10%</td>
                                    <td>45%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="chart-container col-lg-12">
                        <div class="chart-wrapper mobile-hidden">
                            <div id="chart-q2-c12" class="chart animated" data-chart-height="550" data-animations="zoomIn"></div>
                        </div>
                        <div class="chart-toggle-wrapper text-center mobile-hidden">
                            <div class="chart-toggle-wrapper-inner animated" data-animations="zoomIn">
                                <input data-chart-id="q2-c12" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                            </div>
                        </div>
                        <p class="mobile-visible">
                            <a href="charts.php#chart-q2-c12" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="bower_components/jquery.actual/jquery.actual.min.js"></script>
<script src="bower_components/slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fullpage.js/jquery.fullPage.min.js"></script>
<script src="bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
<script src="bower_components/d3/d3.min.js"></script>
<script src="bower_components/c3/c3.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>