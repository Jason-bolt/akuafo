<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Akuafolink</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style type="text/css">

    #edit_actor{
      max-width: 500px;
      border-radius: 20%;
      display: none;
    }

    #project_form{
      max-width: 800px;
      border-radius: 20%;
      display: none;
    }

    .badge {
      padding-left: 9px;
      padding-right: 9px;
      -webkit-border-radius: 9px;
      -moz-border-radius: 9px;
      border-radius: 9px;
    }
    #lblCartCount {
      font-size: 12px;
      background: #ff0000;
      color: #fff;
      padding: 0 5px;
      vertical-align: top;
      margin-left: -10px; 
    }

  </style>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-right py-3">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-left">
        <h1 class="text-light"><a href="index.php"><span style="color: green;">AkuafoLink</span></a></h1>
      </div>
    </div>
  </section>

    <!-- Cart -->
    <div class="container">
      <div class="float-right my-2 container">
        <a href="#">
          Shopping cart <i class="fa fa-shopping-cart"></i>
          <span class='badge badge-warning' id='lblCartCount'>
            <?php
              if (!isset($_SESSION['cart_count'])) {
                echo 0;
               }else{
                echo $_SESSION['cart_count'];
               }
            ?>
          </span>
        </a>
      </div>
    </div>

    <div style="clear: both;"></div>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-right ml-0">
        <form class="form-inline">
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="search" placeholder="Search...">
          </div>
          <button style="background-color: green; color: white;" type="submit" class="btn mb-2">Search</button>
        </form>
      </div>

      <nav class="nav-menu float-left d-none d-lg-block">
        <ul>
          <?php
            if ($page == 'home') {
          ?>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }elseif ($page == 'about') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }elseif ($page == 'market') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="active"><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }elseif ($page == 'contact') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }elseif ($page == 'faq') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }elseif ($page == 'blogs') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li class="active"><a href="blogs.php">Blogs</a></li>
            <li><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }elseif ($page == 'profile') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li class="active"><a href="blogger_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
            }
          ?>
  

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->