<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Analyse</title>

    <!-- Bootstrap -->
    <link href="bower_components/c3/c3.min.css" rel="stylesheet">
    <link href="bower_components/animate.css/animate.min.css" rel="stylesheet">
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
                    <div class="col-md-5">
                        <h2>Vrijetijdsbesteding per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de vrijetijdsbesteding gegroepeerd op leeftijdscategorie.
                            De minimale leeftijd uit deze gegevens is <strong>XX</strong> jaar, de maximale leeftijd is <strong>XX</strong> jaar.
                        </p>
                        <p>
                            Hier ziet u de vrijetijdsbesteding gegroepeerd op leeftijdscategorie.
                            De minimale leeftijd uit deze gegevens is <strong>XX</strong> jaar, de maximale leeftijd is <strong>XX</strong> jaar.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>Leeftijd</th>
                                    <th>Activiteit</th>
                                    <th>Percentage</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>18</td>
                                        <td>Bier zuipen</td>
                                        <td>100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="chart-wrapper">
                            <div id="chart-q1-c1" class="chart animated" data-animations="fadeInRightBig"></div>
                            <p><a href="chart#chart-q1-c1" target="_blank" class="mobile-link">Toon grafiek &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="slide" data-anchor="section-3-slide-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Vrijetijdsbesteding per leeftijdscategorie</h2>
                        <p>
                            Hier ziet u de vrijetijdsbesteding gegroepeerd op leeftijdscategorie.
                            De minimale leeftijd uit deze gegevens is <strong>XX</strong> jaar, de maximale leeftijd is <strong>XX</strong> jaar.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <th>Leeftijd</th>
                                <th>Activiteit</th>
                                <th>Percentage</th>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>18</td>
                                    <td></td>
                                    <td>100%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="chart-wrapper">
                            <div id="chart-q1-c2" class="chart animated" data-animations="fadeInRightBig"></div>
                            <p><a href="chart#chart-q1-c2" target="_blank" class="mobile-link">Toon grafiek &raquo;</a></p>
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
<script src="bower_components/d3/d3.min.js"></script>
<script src="bower_components/c3/c3.min.js"></script>
<script src="js/min/scripts-min.js"></script>

</body>
</html>