<?php
  $page = 'home';
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

    <div class="container">
      <p class="text-center py-5">
        AkuafoLink is a web service that seeks to bridge the gap between input suppliers, farmers, wholesalers, retailers, processors and consumers.
      </p>
    </div>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
     <!--  <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1> -->

      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="market.php#container"><img class="card-img-top" src="assets/img/farm_produce_0.1.png" alt="Farm produce"></a>
            <div class="card-body">
              <!-- <h4 class="card-title">
                <a href="#">Project One</a>
              </h4> -->
              <p class="card-text text-center">Buy and sell farm produce.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="market.php#container"><img class="card-img-top" src="assets/img/farm_input_0.2.png" alt="Farm inputs"></a>
            <div class="card-body">
              <!-- <h4 class="card-title">
                <a href="#">Project One</a>
              </h4> -->
              <p class="card-text text-center">Buy and sell farm inputs.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="market.php#container"><img class="card-img-top" src="assets/img/finance_0.1.png" alt="Financial service"></a>
            <div class="card-body">
              <!-- <h4 class="card-title">
                <a href="#">Project One</a>
              </h4> -->
              <p class="card-text text-center">Request for loans.</p>
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