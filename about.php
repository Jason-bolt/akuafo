<?php
  $page = 'about';
  // Header when no one has logged in
  include('assets/layouts/header1.php');

  // Header when farmer or input supplier logs in
  // include('assets/layouts/header2.php');

  // Header when blogger logs in
  // include('assets/layouts/header3.php');

  // Header when regular user logs in
  // include('assets/layouts/header4.php');
?>

  <main id="main">

    <div class="container" id="container">
      <h1 class="text-center py-4">
        About Us
      </h1>
    </div>

    <!-- Page Content -->
    <div class="container">

      <p>
        AkuafoLink is a web service that seeks to bridge the gap between input suppliers, farmers, wholesalers, retailers, processors and consumers.
      </p>

      <p>
        Farmers have the opportunity to market their produce at their own rates, while interested buyers can request as many as made available by the farmer.
      </p>

      <p>
        Farmers can also purchase products from input suppliers as well as request for loans from the financial services in partnership with AkuafoLink.
      </p>

    </div>
    <!-- /.container -->

  </main><!-- End #main -->

<?php
  include('assets/layouts/footer.php');
?>