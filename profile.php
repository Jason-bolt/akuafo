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

      <!-- Name and email of the Actor -->
      <div class="container row">
        <h5>Name:</h5>
        &nbsp;
        &nbsp;
        <p>John Doe</p>
      </div>

      <div class="container row">
        <h5>Email:</h5>
        &nbsp;
        &nbsp;
        <p>example@email.com</p>
      </div>

      <!-- Edit Profile button -->
      <button class="btn" id="edit_profile" style="background-color: green; color: #fff;">Edit Profile</button>


      <!-- Hidden edit form for edditting name and email of the actor --> 
      <div id="edit_actor" class="container my-4">
        <div class="card">
          <div class="card-body">
            <form class="form-row">

              <div class="form-group col-md-6">
                <label>First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name">
              </div>
              
              <div class="form-group col-md-6">
                <label>Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
              </div>
              
              <div class="form-group col-md-12">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <!-- Submit button -->
              <div class="form-group col-md-12">
                <input type="submit" class="btn" style="background-color: green; color: #fff; width: 100%;" id="edit_submit" name="edit_submit" value="Save">
              </div>
            </form>
            <div>
              <!-- Close edit form -->
              <button style="width: 100%;" class="btn btn-danger ml-0" id="cancel_edit">Cancel</button>
            </div>

          </div>
        </div>
      </div>
      <!-- ./End of hidden edit form -->

      <!-- Horizontal line -->
      <hr />

      <!-- Create link button -->
      <button class="btn my-4" id="create_project" style="background-color: green; color: #fff;">Create Project</button>


      <!-- Hidden form for adding new product --> 
      <div id="project_form" class="container my-4">
        <div class="card">
          <div class="card-header text-center bg-success text-light">
            <strong>Create Product</strong>
          </div>
          <div class="card-body">
            <form class="form-row" enctype="multipart/form-data">

              <div class="form-group col-md-6">
                <label>Product Image</label>
                <input type="file" class="form-control" id="product_image" name="product_image">
              </div>
              
              <div class="form-group col-md-6">
                <label>Location</label>
                <input type="text" class="form-control" id="loaction" name="loaction" placeholder="e.g. Accra, Cape coast, ...">
              </div>

              <div class="form-group col-md-6">
                <label>Available</label>
                <input type="text" class="form-control" id="available" name="available" placeholder="e.g. Now, In a week, in two months,...">
              </div>

              <div class="form-group col-md-6">
                <label>Quantity</label>
                <select class="form-control" name="quantity">
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
              </div>

              <div class="form-group col-md-6">
                <label>Product description</label>
                <textarea class="form-control" id="description"></textarea>
              </div>
              
              <!-- Submit button -->
              <div class="form-group col-md-12">
                <input type="submit" class="btn" style="background-color: green; color: #fff; width: 100%;" id="project_submit" name="edit_submit" value="Create">
              </div>
            </form>
            <div>
              <!-- Close form -->
              <button style="width: 100%;" class="btn btn-danger ml-0" id="cancel_project">Cancel</button>
            </div>

          </div>
        </div>
      </div>
      <!-- ./End of hidden form -->


      <!-- Already existing products -->
      <div class="row my-5">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="edit_product.php"><img class="card-img-top" src="assets/img/farm_produce_0.1.png" alt="Farm produce"></a>
            <div class="card-body">
              
              <div class="row">
                <a href="edit_product.php" class="btn btn-success float-left">Edit</a>
                <a href="#" class="btn btn-danger float-right ml-4">Delete</a>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="edit_product.php"><img class="card-img-top" src="assets/img/farm_input_0.2.png" alt="Farm inputs"></a>
            <div class="card-body">

              <div class="row">
                <a href="edit_product.php" class="btn btn-success float-left">Edit</a>
                <a href="#" class="btn btn-danger float-right ml-4">Delete</a>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="edit_product.php"><img class="card-img-top" src="assets/img/finance_0.1.png" alt="Financial service"></a>
            <div class="card-body">
              
              <div class="row">
                <a href="edit_product.php" class="btn btn-success float-left">Edit</a>
                <a href="#" class="btn btn-danger float-right ml-4">Delete</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="edit_product.php"><img class="card-img-top" src="assets/img/farm_produce_0.1.png" alt="Farm produce"></a>
            <div class="card-body">
              
              <div class="row">
                <a href="edit_product.php" class="btn btn-success float-left">Edit</a>
                <a href="#" class="btn btn-danger float-right ml-4">Delete</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="edit_product.php"><img class="card-img-top" src="assets/img/farm_input_0.1.png" alt="Farm inputs"></a>
            <div class="card-body">
              
              <div class="row">
                <a href="edit_product.php" class="btn btn-success float-left">Edit</a>
                <a href="#" class="btn btn-danger float-right ml-4">Delete</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10" style="border: none;">
            <a href="edit_product.php"><img class="card-img-top" src="assets/img/finance_0.1.png" alt="Financial service"></a>
            <div class="card-body">
              
              <div class="row">
                <a href="edit_product.php" class="btn btn-success float-left">Edit</a>
                <a href="#" class="btn btn-danger float-right ml-4">Delete</a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    <!-- /.container -->

  </main><!-- End #main -->

<?php
  include('assets/layouts/footer.php');
?>

<!-- Script for popup -->
<script type="text/javascript">

  // For Editting Actor
  document.getElementById('edit_profile').addEventListener('click', function(){
    document.getElementById('edit_actor').style.display = 'block';
  });

  document.getElementById('cancel_edit').addEventListener('click', function(){
    document.getElementById('edit_actor').style.display = 'none';
  });

  // For creating project
  document.getElementById('create_project').addEventListener('click', function(){
    document.getElementById('project_form').style.display = 'block';
  });

  document.getElementById('cancel_project').addEventListener('click', function(){
    document.getElementById('project_form').style.display = 'none';
  });

</script>