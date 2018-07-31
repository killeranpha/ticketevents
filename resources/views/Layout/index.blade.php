<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Event Admin</title>
    <base href="{{asset('')}}"/>
    <!-- Fontfaces CSS-->
    <link href="admin_asset/css/font-face.css" rel="stylesheet">
    <link href="admin_asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link href="admin_asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="admin_asset/vendor/animsition/animsition.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/wow/animate.css" rel="stylesheet">
    <link href="admin_asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/slick/slick.css" rel="stylesheet">
    <link href="admin_asset/vendor/select2/select2.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="admin_asset/css/theme.css" rel="stylesheet">
    <link href="admin_asset/fontawesome/css/all.css" rel="stylesheet">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        @include('admin.layout.header')
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        @include('admin.layout.headerMobile')
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- CONTENT-->
            @yield('content')
            <!-- END CONTENT-->

            <!-- COPYRIGHT-->
            @include('admin.layout.copyright')
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="admin_asset/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin_asset/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin_asset/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin_asset/vendor/slick/slick.min.js">
    </script>
    <script src="admin_asset/vendor/wow/wow.min.js"></script>
    <script src="admin_asset/vendor/animsition/animsition.min.js"></script>
    <script src="admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin_asset/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin_asset/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin_asset/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin_asset/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin_asset/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin_asset/js/main.js"></script>

</body>

</html>
<!-- end document-->