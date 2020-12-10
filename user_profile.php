<?php
  $page = 'profile';
  include('assets/layouts/header2.php');
?>

  <main id="main">

    <div class="container" id="container">
      <h1 class="text-center py-4">
        Profile
      </h1>
    </div>

    <!-- Page Content -->

    <div class="container">

      <!-- Name and details of the Actor -->
      <div class="container row">
        <h5>Name:</h5>
        &nbsp;
        &nbsp;
        <p>John Doe</p>
      </div>

      <div class="container row">
        <h5>Username:</h5>
        &nbsp;
        &nbsp;
        <p>username</p>
      </div>

      <div class="container row">
        <h5>Email:</h5>
        &nbsp;
        &nbsp;
        <p>example@email.com</p>
      </div>

      <div class="container row">
        <h5>City:</h5>
        &nbsp;
        &nbsp;
        <p>Tema</p>
      </div>

      <div class="container row">
        <h5>Mobile:</h5>
        &nbsp;
        &nbsp;
        <p>+2334785963154</p>
      </div>

      <div class="container row">
        <h5>Telephone:</h5>
        &nbsp;
        &nbsp;
        <p>+2334785963154</p>
      </div>

      <div class="container row">
        <h5>Residential address:</h5>
        &nbsp;
        &nbsp;
        <p>Something</p>
      </div>

      <div class="container row">
        <h5>Digital address:</h5>
        &nbsp;
        &nbsp;
        <p>Gt-322-232</p>
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
                <input type="text" class="form-control" id="first_name" name="first_name" value="John">
              </div>
              
              <div class="form-group col-md-6">
                <label>Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="Doe">
              </div>

              <div class="form-group col-md-12">
                <label>Username</label>
                <input type="text" class="form-control" id="username" name="username" value="Username">
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="example@email.com">
              </div>

              <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" class="form-control" id="city" name="city" value="Tema">
              </div>

              <div class="form-group col-md-6">
                <label>Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" value="+2334785963154">
              </div>

              <div class="form-group col-md-6">
                <label>Telephone</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" value="+2334785963154">
              </div>

              <div class="form-group col-md-6">
                <label>Residential address</label>
                <input type="text" class="form-control" id="raddress" name="raddress" value="Something">
              </div>

              <div class="form-group col-md-6">
                <label>Digital address</label>
                <input type="text" class="form-control" id="daddress" name="daddress" value="Gt-322-232">
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

      <br />
      <br />
      <!-- Horizontal line -->
      <hr />

      <!-- Cart for every user -->
      <div>
        <h3>Cart</h3>

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
                <!-- <p class="card-text text-center">Farm produce</p> -->
              </div>
            </div>
          </div>

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
                <!-- <p class="card-text text-center">Farm produce</p> -->
              </div>
            </div>
          </div>  

        </div>
        <!-- /.row -->  
      </div>
      

      <!-- Total amount and buy button -->
      <div class="row">
        <div class="col">
          <p>Total amount: $100.00</p>
          <a href="#" class="btn btn-success py-1">Buy</a>
        </div>
      </div>
      <!-- /.cart -->

  </div>
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