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

</head>

<body style="background-color: #ebebeb;">

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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php#container">About Us</a></li>
            <li><a href="market.php#container">Market</a></li>
            <li><a href="contact.php#container">Contact</a></li>
            <li><a href="faq.php#container">FAQ</a></li>
            <li><a href="blogs.php#container">Blogs</a></li>
            <li class="active"><a href="login.php" class="btn">Login</a></li>
            <li style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Page Content -->
    <div class="container my-5">

      <div class="row container">
        <div class="my-5" style="margin: auto;">
          <div class="card h-10">
            <div class="card-header text-center" style="background-color: green; color: #fff;">
              AkuafoLink Login
            </div>
            <div class="card-body px-5">
              <form action="#" class="form" onsubmit="return validate_form()">
                <p class="text-center" style="color: red;" id="info"></p>
                <div class="row">
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
                  </div>

                  &emsp;

                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" id="password" type="password" name="password" required>
                  </div>
                </div>

                <!-- Forgot password -->
                <p><small><a href="#">Forgot password</a></small></p>

                <input type="submit" name="login_submit" value="Login" class="btn" style="background-color: green; color: #fff;">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </main><!-- End #main -->

<?php
  include('assets/layouts/footer.php');
?>

  <script type="text/javascript">
    
    function validate_form(){
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      if (username.trim() == '' || password.trim() == '') {
        var info = document.getElementById('info');
        info.innerHTML = "All fields must be filled!";
        alert('All fields must be filled!');
        return false
      }

      return true;
    
    }

  </script>
