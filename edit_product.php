<?php
  $page = 'profile';
  include('assets/layouts/header2.php');
?>

  <main id="main">

    <div class="container">
      <h1 class="text-center py-4">
        Profile
      </h1>
    </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <form class="form-row" enctype="multipart/form-data">
              <div class="card-body">
                <img class="card-img-top" src="assets/img/farm_produce_0.1.png" alt="Farm produce">
            
                <label>Change image</label>
                <input type="file" name="image" class="form-control">
                <br />
                <h4 class="card-title">
                  <input type="text" name="product_name" class="form-control" placeholder="Name of product">
                  <!-- <a href="#">Project One</a> -->
                </h4>
                <!-- <p class="card-text"><strong>Seller's name:</strong> John Doe</p> -->
                
                <div class="row container">
                  <p class="card-text"><strong class="col">Location:</strong>
                  <input type="text" class="col form-control" name="location" placeholder="Accra"></p> 
                </div>
                <br />
                
                <p class="card-text"><strong>Product description:</strong> 
                  <textarea class="form-control" name="description"></textarea>
                </p>
                <p class="card-text"><strong>Time available: </strong>(in weeks) <input class="form-control" value="10" type="number" name="available"></p>
                <p class="card-text"><strong>Quantity:</strong> <input class="form-control" placeholder="e.g. 10 sacs, 20 pieces, ..." type="text" name="quantity"></p>
                <!-- <p class="card-text text-center">Farm produce</p> -->
                <input type="submit" class="btn btn-success" name="edit_profile_submit" value="Save">
              </div>
            </form>    
          </div>
        </div>

      <!-- /.row -->
    <!-- /.container -->

  </main><!-- End #main -->

<?php
  include('assets/layouts/footer.php');
?>