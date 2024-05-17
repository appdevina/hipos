<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>hipos</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../fonts.googleapis.com/css2.css" rel="stylesheet">
    <link href="../../fonts.googleapis.com/css2_2.css" rel="stylesheet">
    <link href="../../fonts.googleapis.com/css2_3.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/viho/assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
          <div class="loader-p"></div>
      </div>
  </div>
  <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- NAVBAR -->
      @include('layouts.navbar')
      <!-- END NAVBAR -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">

        <!-- LEFT SIDEBAR -->
        @include('layouts.sidebar')
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        @yield('content')
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
          <div class="container-fluid">
            <p class="copyright">&copy; 2023 <a href="#">hi.thisisvinn</a>. All Rights Reserved.</p>
          </div>
        </footer>
      </div>
    </div>
    <!-- END WRAPPER -->
    
    <!-- JAVASCRIPT -->
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="http://admin.pixelstrap.com/viho/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="http://admin.pixelstrap.com/viho/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="http://admin.pixelstrap.com/viho/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

    {{-- CUSTOM JS --}}
    @yield('js')
  </body>
</html>