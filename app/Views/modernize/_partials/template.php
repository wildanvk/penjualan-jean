<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 10:31:53 GMT -->

<head>
  <!--  Title -->
  <title>Sistem Informasi Penjualan</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('modernize-bootstrap'); ?>/dist/images/logos/penjualan.png" />

  <!-- Tabler Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

  <!-- Datatable -->
  <link rel="stylesheet" href="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css" />

  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href="<?php echo base_url('modernize-bootstrap'); ?>/dist/css/<?= session()->get('mode') == 'light' ? 'style.min.css' : 'style-dark.min.css' ?>" />
</head>

<body>
  <?= $this->include('modernize/_partials/preloader') ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?= $this->include('modernize/_partials/sidebar') ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?= $this->include('modernize/_partials/header') ?>
      <!--  Header End -->
      <div class="container-fluid mw-100">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>

  <!--  Mobilenavbar -->
  <?= $this->include('modernize/_partials/mobile-sidebar') ?>

  <!--  Customizer -->
  <?= $this->include('modernize/_partials/customizer') ?>
  <!--  Customizer -->
  <!--  Import Js Files -->
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js">
  </script>
  <!--  core files -->
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/app.min.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/app.init.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/app-style-switcher.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/sidebarmenu.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/custom.js"></script>
  <!--  current page js files -->
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/owl.carousel/dist/owl.carousel.min.js">
  </script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/dashboard.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/datatable/datatable-basic.init.js"></script>
  <script src="<?php echo base_url('modernize-bootstrap'); ?>/dist/js/myjs/my.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 10:32:20 GMT -->

</html>