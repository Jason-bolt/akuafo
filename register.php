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
            <li><a href="contact.php#container#container">Contact</a></li>
            <li><a href="faq.php#container">FAQ</a></li>
            <li><a href="blogs.php#container">Blogs</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li class="active" style="background-color: green;"><a href="register.php" class="btn text-light">Register</a></li>
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
              AkuafoLink Registration
            </div>
            <div class="card-body px-5">
              <form action="#" class="form" method="POST" onsubmit="return validate_form()">
                
                <!-- Info location -->
                <p class="text-center" style="color: red;" id="info"></p>
                
                <div class="row">
                  <div class="form-group">
                    <label>First Name *</label>
                    <input class="form-control" type="text" id="first_name" name="first_name" placeholder="John" required>
                  </div>

                  &emsp;

                  <div class="form-group">
                    <label>Last Name *</label>
                    <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Doe" required>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col">
                    <label>Username *</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group">
                    <label>Email *</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="example@email.com" required>
                  </div>

                  &emsp;

                  <div class="form-group">
                    <label>Password *</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group">
                    <label>Category *</label>
                    <select class="form-control" id="actor" name="actor" required>
                      <option value="none" selected="selected" disabled>Which actor are you?</option>
                      <option value="farmer">Farmer</option>
                      <option value="input_supplier">Input Supplier</option>
                      <option value="consumer">Consumer</option>
                      <option value="blogger">Blogger</option>
                    </select>
                  </div>

                  &emsp;
                  &emsp;

                  <div class="form-group">
                    <label>City *</label>
                    <input class="form-control" type="text" id="city" name="city" placeholder="Tema" required>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group">
                    <label>Mobile *</label>
                    <input class="form-control" type="tel" id="mobile" name="mobile" required>
                  </div>

                  &emsp;

                  <div class="form-group">
                    <label>Telephone *</label>
                    <input class="form-control" type="tel" id="telephone" name="telephone" required>
                  </div>
                </div>

                <div class="row">        
                  <div class="form-group">
                    <label>Residential address *</label>
                    <input class="form-control" type="text" id="raddress" name="raddress" required>
                  </div>

                  &emsp;

                  <div class="form-group">
                    <label>Digital Address *</label>
                    <input class="form-control" type="tel" id="daddress" name="daddress" required>
                  </div>
                </div>

                <input type="submit" name="register_submit" value="Register" class="btn" style="background-color: green; color: #fff;">
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
    var first_name = document.getElementById('first_name').value;
    var last_name = document.getElementById('last_name').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var actor = document.getElementById('actor').value;
    var city = document.getElementById('city').value;
    var phone_number = document.getElementById('phone_number').value;
    var address = document.getElementById('address').value;


    // If the fields are empty
    if (username.trim() == '' || first_name.trim() == '' || last_name.trim() == '' || password.trim() == '' || city.trim() == '' || phone_number.trim() == '' || address == '') {
      // To display error messages
      var info = document.getElementById('info');
      info.innerHTML = "All fields are required!";
      alert("All fields are required!");

      return false;
    }

    return true;

  }

</script>