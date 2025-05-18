<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Projek Kelompok 9</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/') ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/')?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets/')?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url('assets/')?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/')?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/')?>css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.2.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?= base_url('home') ?>" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Toothsome<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url('#hero') ?>">Home</a></li>
          <li><a href="<?= base_url('#about') ?>">About</a></li>
          <li><a href="<?= base_url('#menu') ?>">Menu</a></li>
          <li><a href="<?= base_url('#contact') ?>">Contact</a></li>
          <?php if($this->session->userdata('email')) { ?>
            <li class="nav-item no-arrow mx-1">
              <a class="nav-link toggle" href="<?= base_url('Home/detail') ?>">
                <i class="fa fa-shopping-cart fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-warning badge-counter" style="color:red;font-style:;font-weight:bold;">
                  <?= $jlh ?>
                </span>
              </a>
            </li>
						<li class="nav-item no-arrow mx-1">
							<a class="nav-link toggle" href="<?= base_url('Home/pembelian') ?>">
								<i class="fa fa-history fa-fw"></i>
								<!-- Counter - Alerts -->
								<span class="badge badge-danger badge-counter" style="color:red;font-style:;font-weight:bold;">
									!
								</span>
							</a>
						</li>
          <?php } ?>
        </ul>
      </nav><!-- .navbar -->

      <?php if($this->session->userdata('email')) { ?>
        <a class="btn-book-a-table" href="#">
        <img class="" src="<?= base_url('uploads/user.png') ?>" width="30" alt="">  
        <span class="mr-2 d-none d-lg-inline text-gray-600 bold"><?= $user['nama'] ?></span>
       </a>
       <a class="btn-book-a-table" href="<?= base_url ('auth/logout') ?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-white-400"></i>
       </a>
    	<?php } else { ?>
    		<a class="btn-book-a-table" href="<?= base_url ('auth') ?>">Masuk</a>
			<?php  } ?>
      <!-- <a class="btn-book-a-table" href="<?= base_url ('auth') ?>">Beli Yuk</a> -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
