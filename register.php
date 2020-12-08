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

  <main id="main">

    <!-- Page Content -->
    <div class="container">

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

                  <div class="form-group">
                    <label>Actor *</label>
                    <select class="form-control" id="actor" name="actor" required>
                      <option value="none" selected="selected" disabled>Which actor are you?</option>
                      <option value="farmer">Farmer</option>
                      <option value="input_supplier">Input Supplier</option>
                      <option value="consumer">Consumer</option>
                    </select>
                    <!-- <input class="form-control" type="first_name" name="first_name" placeholder="John"> -->
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

</body>
</html>

<script type="text/javascript">
  
  function validate_form(){
    var first_name = document.getElementById('first_name').value;
    var last_name = document.getElementById('last_name').value;
    var password = document.getElementById('password').value;
    var actor = document.getElementById('actor').value;


    // If the fields are empty
    if (first_name.trim() == '' || last_name.trim() == '' || password.trim() == '') {
      // To display error messages
      var info = document.getElementById('info');
      info.innerHTML = "All fields are required!";
      alert("All fields are required!");

      return false;
    }

    return true;

  }

</script>