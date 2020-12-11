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