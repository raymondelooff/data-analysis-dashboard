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

<div id="wrapper" class="charts-overview">

    <!-- Chart -->
    <section class="section" data-anchor="chart-q1-c1">
        <div class="container">
            <div class="row clearfix">
                <div class="chart-wrapper">
                    <div id="chart-q1-c1" class="chart"></div>
                </div>
                <div class="chart-toggle-wrapper text-center">
                    <div class="chart-toggle-wrapper-inner">
                        <input data-chart-id="q1-c1" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chart slide -->
    <section class="section" data-anchor="chart-q1-c2">
        <div class="container">
            <div class="row clearfix">
                <div class="chart-wrapper">
                    <div id="chart-q1-c2" class="chart"></div>
                </div>
                <div class="chart-toggle-wrapper text-center">
                    <div class="chart-toggle-wrapper-inner">
                        <input data-chart-id="q1-c2" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chart slide -->
    <section class="section" data-anchor="chart-q1-c3">
        <div class="container">
            <div class="row clearfix">
                <div class="chart-wrapper">
                    <div id="chart-q1-c3" class="chart"></div>
                </div>
                <div class="chart-toggle-wrapper text-center">
                    <div class="chart-toggle-wrapper-inner">
                        <input data-chart-id="q1-c3" class="chart-toggle" type="checkbox" checked data-toggle="toggle" data-on="Staafdiagram" data-off="Lijndiagram" data-onstyle="dark-blue-bg" data-offstyle="blue-bg" data-width="150">
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