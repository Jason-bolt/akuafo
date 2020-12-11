<?php
  $page = 'market';
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
        Market
      </h1>
    </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <a href="#"><img class="card-img-top" src="assets/img/farm_produce_0.1.png" alt="Farm produce"></a>
            <div class="card-body">
              <h4 class="card-title">
                Name of product
                <!-- <a href="#">Project One</a> -->
              </h4>
              <p class="card-text"><strong>Seller's name:</strong> John Doe</p>
              <p class="card-text"><strong>Location:</strong> Accra</p>
              <p class="card-text"><strong>Product description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
              <p class="card-text"><strong>Time available:</strong> Now</p>
              <p class="card-text"><strong>Quantity:</strong> 10 sacs</p>
              <p class="card-text"><strong>Amount per unit:</strong> $10.00</p>
              <!-- <p class="card-text text-center">Farm produce</p> -->
            </div>
          </div>
        </div>

        <div class="row m-5">
          <h5>Quantity:</h5>
          &emsp;
          <form>
            <select>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>

            &nbsp;

            <input type="submit" name="submit_buy" class="btn py-1" style="background-color: green; color: #fff;" value="Buy">

            &nbsp;
            
            <a href="#" id="add_to_cart" name="add_to_cart" class="btn py-1" style="background-color: green; color: #fff;">Add to cart</a>

          </form>
      
        </div>

      </div>
      <!-- /.row -->
    <!-- /.container -->

  </main><!-- End #main -->

<?php
  include('assets/layouts/footer.php');
?>

<script type="text/javascript">
  document.getElementById('add_to_cart').addEventListener('click', function(){
    <?php
      $_SESSION['cart_count'] = (int)$_SESSION['cart_count'] + 1;
    ?>
  });
</script>