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
            <h1>Is er een verband tussen opleidingsniveau's en vrijetijdsbesteding?</h1>
            <p></p>
        </div>
    </section>

    <section class="section" data-anchor="section-3">
        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-1">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-lg-5">
                        <h2>Cultuurbezoeken per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de cultuurbezoeken gegroepeerd op leeftijdscategorie.
                            De grootte van de leeftijdsgroep in procenten wat minimaal 1 keer per maand de gegeven activiteit onderneemt.
                        </p>
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
                        <p class="mobile-visible">
                            <a href="chart#chart-q1-c1" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-7 mobile-hidden">
                        <div class="chart-wrapper">
                            <div id="chart-q1-c1" class="chart animated" data-animations="fadeInRightBig"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7 mobile-hidden">
                        <div class="chart-wrapper">
                            <div id="chart-q1-c2" class="chart animated" data-animations="fadeInLeftBig"></div>
                        </div>
                        <div class="animated text-center" data-animations="fadeInUpBig">
                            <input data-chart-id="q1-c2" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <h2>Cultuurbezoeken per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u net als op de vorige slide, de cultuurbezoeken gegroepeerd op leeftijdscategorie.
                            Echter is hier gekeken naar, de grootte van de leeftijdsgroep in procenten wat vaker dan 3 keer per jaar de gegeven activiteit onderneemt.
                        </p>
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
                        <p class="mobile-visible">
                            <a href="chart#chart-q1-c2" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-3">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-lg-5">
                        <h2>Caf&eacute;bezoeken per leeftijdscategorie in de tijd</h2>
                        <p>
                            Hier ziet u de caf&eacute;bezoeken per leeftijdscategorie gegroepeerd op jaar.
                            De grootte van de leeftijdsgroep in procenten wat minimaal 1 keer per week een caf&eacute; bezoekt.
                        </p>
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
                        <p class="mobile-visible">
                            <a href="chart#chart-q1-c3" target="_blank">Toon grafiek &raquo;</a>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-7 mobile-hidden">
                        <div class="chart-wrapper">
                            <div id="chart-q1-c3" class="chart animated" data-animations="fadeInRightBig"></div>
                        </div>
                        <div class="animated text-center" data-animations="fadeInUpBig">
                            <input data-chart-id="q1-c3" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                        </div>
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
<script src="bower_components/slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fullpage.js/jquery.fullPage.min.js"></script>
<script src="bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
<script src="bower_components/d3/d3.min.js"></script>
<script src="bower_components/c3/c3.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>