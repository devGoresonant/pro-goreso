<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Creative - Bootstrap Admin Template</title>

        <!-- Bootstrap CSS -->
        <link href="{{ url('public/assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('public/assets/admin/css/urban-css.css') }}" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="{{ url('public/assets/admin/css/bootstrap-theme.css') }}" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="{{ url('public/assets/admin/css/elegant-icons-style.css') }}" rel="stylesheet" />
        <link href="{{ url('public/assets/admin/css/font-awesome.min.css') }}" rel="stylesheet" />    
        <!-- full calendar css-->
        <link href="{{ url('public/assets/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
        <link href="{{ url('public/assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="{{ url('public/assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ url('public/assets/admin/css/owl.carousel.css') }}" type="text/css">
        <link href="{{ url('public/assets/admin/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
        <!-- Custom styles -->
        <link rel="stylesheet" href="{{ url('public/assets/admin/css/fullcalendar.css') }}">
        <link href="{{ url('public/assets/admin/css/widgets.css') }}" rel="stylesheet">
        <link href="{{ url('public/assets/admin/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('public/assets/admin/css/style-responsive.css') }}" rel="stylesheet" />
        <link href="{{ url('public/assets/admin/css/xcharts.min.css') }}" rel=" stylesheet">	
        <link href="{{ url('public/assets/admin/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">

        <!-- javascripts -->
        <script src="{{ url('public/assets/admin/js/jquery.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery-ui-1.10.4.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery-1.8.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/assets/admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>

    </head>
    <?php $isLogin = Auth::check(); ?>
    <body class="<?php if (!('null' !== $isLogin && $isLogin == 1)) echo 'login-img3-body'; ?>">    <!-- Add login class if user is not login -->
        <!-- container section start -->
        <section id="container" class="">

            <?php if ('null' !== $isLogin && $isLogin == 1) { ?>        <!-- If user is login only then include siderbar and header -->
                @include('admin.includes.header')
                @include('admin.includes.sidebar')
            <?php } ?>
            @yield('content')
        </section>

        <!-- bootstrap -->
        <script src="{{ url('public/assets/admin/js/bootstrap.min.js') }}"></script>
        <!-- nice scroll -->
        <script src="{{ url('public/assets/admin/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <!-- charts scripts -->
        <script src="{{ url('public/assets/admin/assets/jquery-knob/js/jquery.knob.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
        <script src="{{ url('public/assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/owl.carousel.js') }}" ></script>
        <!-- jQuery full calendar -->
        <<script src="{{ url('public/assets/admin/js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
        <script src="{{ url('public/assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
        <!--script for this page only-->
        <script src="{{ url('public/assets/admin/js/calendar-custom.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery.rateit.min.js') }}"></script>
        <!-- custom select -->
        <script src="{{ url('public/assets/admin/js/jquery.customSelect.min.js') }}" ></script>
        <script src="{{ url('public/assets/admin/assets/chart-master/Chart.js') }}"></script>

        <!--custome script for all page-->
        <script src="{{ url('public/assets/admin/js/scripts.js') }}"></script>
        <!-- custom script for this page-->
        <script src="{{ url('public/assets/admin/js/sparkline-chart.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/easy-pie-chart.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/xcharts.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery.autosize.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery.placeholder.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/gdp-data.js') }}"></script>	
        <script src="{{ url('public/assets/admin/js/morris.min.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/sparklines.js') }}"></script>	
        <script src="{{ url('public/assets/admin/js/charts.js') }}"></script>
        <script src="{{ url('public/assets/admin/js/jquery.slimscroll.min.js') }}"></script>
        <script>

//knob
$(function () {
    $(".knob").knob({
        'draw': function () {
            $(this.i).val(this.cv + '%')
        }
    })
});

//carousel
$(document).ready(function () {
    $("#owl-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

    });
});

//custom select box

$(function () {
    $('select.styled').customSelect();
});

/* ---------- Map ---------- */
$(function () {
    $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
            regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function (e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
    });
});

        </script>

    </body>
</html>