<<<<<<< HEAD
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

  <style type="text/css">
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

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/farm_input.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Akuafolink</span></h2>
                <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/farm_input1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Trade in farm inputs.</h2>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/farm_produce.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Trade in farm produce.</h2>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

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
        <!-- <form action="" method="post" class="form-group">
          <input type="email" name="email" class="form-control"><input type="submit" value="Subscribe">
        </form> -->
        <!-- <h1 class="text-light"><a href="index.html"><span>Mamba</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
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
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'about') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'market') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="active"><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'contact') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'faq') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'blogs') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li class="active"><a href="blogs.php">Blogs</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'login') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li class="active"><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'register') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li class="active"><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }
          ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
=======
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

  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/farm_input.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Akuafolink</span></h2>
                <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/farm_input1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Trade in farm inputs.</h2>
                <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/farm_produce.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Trade in farm produce.</h2>
               <!--  <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

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
        <!-- <form action="" method="post" class="form-group">
          <input type="email" name="email" class="form-control"><input type="submit" value="Subscribe">
        </form> -->
        <!-- <h1 class="text-light"><a href="index.html"><span>Mamba</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
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
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'about') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'market') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="active"><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'contact') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'faq') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="faq.php">FAQ</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'login') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li class="active"><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }elseif ($page == 'register') {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li class="active"><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
          <?php
            }
          ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
>>>>>>> d4fc944fd961d986e704f501fda0c06f49dea374
  </header><!-- End Header -->