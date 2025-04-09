<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NATIONAL ICT GOVERNANCE OVERVIEW</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

<?php $uri = service('uri')->getSegment(1); ?>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="<?= base_url('/HomePage') ?>" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo"> -->
      <h1 class="sitename">ICT OVERVIEW</h1>
      <span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?= base_url('/HomePage') ?>" class="<?= $uri === 'HomePage' ? 'active' : '' ?>">Home</a></li>
        <li><a href="<?= base_url('/AlertsPage') ?>" class="<?= $uri === 'AlertsPage' ? 'active' : '' ?>">Alerts</a></li>
        <li><a href="<?= base_url('/TrackerPage') ?>" class="<?= $uri === 'TrackerPage' ? 'active' : '' ?>">Tracker</a></li>
        <li><a href="<?= base_url('/ProjectsPage') ?>" class="<?= $uri === 'ProjectsPage' ? 'active' : '' ?>">Projects</a></li>
        <li class="dropdown <?= in_array($uri, ['DICTPage', 'DOJPage', 'NBIPage', 'NCPPage']) ? 'active' : '' ?>">
          <a href="#"><span>Agencies</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="<?= base_url('/DICTPage') ?>" class="<?= $uri === 'DICTPage' ? 'active' : '' ?>">DICT</a></li>
            <li><a href="<?= base_url('/DOJPage') ?>" class="<?= $uri === 'DOJPage' ? 'active' : '' ?>">DOJ</a></li>
            <li><a href="<?= base_url('/NBIPage') ?>" class="<?= $uri === 'NBIPage' ? 'active' : '' ?>">NBI</a></li>
            <li><a href="<?= base_url('/NCPPage') ?>" class="<?= $uri === 'NCPPage' ? 'active' : '' ?>">NPC</a></li>
          </ul>
        
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        <li><a href="<?= base_url('/ContactsPage') ?>" class="<?= $uri === 'ContactsPage' ? 'active' : '' ?>">Contacts</a></li>
        
    </nav>

   

  </div>
</header>
<!-- End Header -->

</body>
</html>
