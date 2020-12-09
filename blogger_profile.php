<?php
  $page = 'profile';
  include('assets/layouts/header3.php');
?>

  <main id="main">

    <div class="container" id="container">
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

      <div class="container row">
        <h5>City:</h5>
        &nbsp;
        &nbsp;
        <p>Tema</p>
      </div>

      <div class="container row">
        <h5>Phone number:</h5>
        &nbsp;
        &nbsp;
        <p>+2334785963154</p>
      </div>

      <div class="container row">
        <h5>Residential address:</h5>
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
              
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="example@email.com">
              </div>

              <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" class="form-control" id="city" name="city" value="Tema">
              </div>

              <div class="form-group col-md-6">
                <label>Phone number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="+2334785963154">
              </div>

              <div class="form-group col-md-6">
                <label>Residential address</label>
                <input type="text" class="form-control" id="address" name="address" value="Gt-322-232">
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
      <button class="btn my-4" id="create_project" style="background-color: green; color: #fff;">Create Blog</button>


      <!-- Hidden form for adding new product --> 
      <div id="project_form" class="container my-4">
        <div class="card">
          <div class="card-header text-center bg-success text-light">
            <strong>Create Blog</strong>
          </div>
          <div class="card-body">
            <form class="form-row" enctype="multipart/form-data">

              <div class="form-group col-md-12">
                <label>Blog Heading</label>
                <input type="text" class="form-control" id="blog_heading" name="blog_heading">
              </div>

              <div class="form-group col-md-12">
                <label>Blog content <small class="text-info">(Blog will be displayed exactly how it is typed!)</small></label>
                <textarea class="form-control" id="blog_content" name="blog_content" rows="10"></textarea>
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

      <!-- Blogs -->
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <div class="text-center my-2">
              <h3><strong>Blog Heading</strong></h3>
            </div>
            <div class="card-body pt-0">
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
              <hr />
              <small>Posted by: Name of blogger</small>
              <br />
              <small>09th December, 2020</small>
            </div>
            <div class="card-footer">
              <a href="edit_blog.php" class="btn" style="background-color: green; color: #fff;">Edit</a>
              <a href="#" class="btn btn-danger" onclick="return confirm('This blog will be deleted!')">Delete</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <div class="text-center my-2">
              <h3><strong>Blog Heading</strong></h3>
            </div>
            <div class="card-body pt-0">
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
              <hr />
              <small>Posted by: Name of blogger</small>
              <br />
              <small>09th December, 2020</small>
            </div>
            <div class="card-footer">
              <a href="edit_blog.php" class="btn" style="background-color: green; color: #fff;">Edit</a>
              <a href="#" class="btn btn-danger" onclick="return confirm('This blog will be deleted!')">Delete</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <div class="text-center my-2">
              <h3><strong>Blog Heading</strong></h3>
            </div>
            <div class="card-body pt-0">
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
              <hr />
              <small>Posted by: Name of blogger</small>
              <br />
              <small>09th December, 2020</small>
            </div>
            <div class="card-footer">
              <a href="edit_blog.php" class="btn" style="background-color: green; color: #fff;">Edit</a>
              <a href="#" class="btn btn-danger" onclick="return confirm('This blog will be deleted!')">Delete</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <div class="text-center my-2">
              <h3><strong>Blog Heading</strong></h3>
            </div>
            <div class="card-body pt-0">
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
              <hr />
              <small>Posted by: Name of blogger</small>
              <br />
              <small>09th December, 2020</small>
            </div>
            <div class="card-footer">
              <a href="edit_blog.php" class="btn" style="background-color: green; color: #fff;">Edit</a>
              <a href="#" class="btn btn-danger" onclick="return confirm('This blog will be deleted!')">Delete</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <div class="text-center my-2">
              <h3><strong>Blog Heading</strong></h3>
            </div>
            <div class="card-body pt-0">
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
              <hr />
              <small>Posted by: Name of blogger</small>
              <br />
              <small>09th December, 2020</small>
            </div>
            <div class="card-footer">
              <a href="edit_blog.php" class="btn" style="background-color: green; color: #fff;">Edit</a>
              <a href="#" class="btn btn-danger" onclick="return confirm('This blog will be deleted!')">Delete</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <div class="text-center my-2">
              <h3><strong>Blog Heading</strong></h3>
            </div>
            <div class="card-body pt-0">
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
              <hr />
              <small>Posted by: Name of blogger</small>
              <br />
              <small>09th December, 2020</small>
            </div>
            <div class="card-footer">
              <a href="edit_blog.php" class="btn" style="background-color: green; color: #fff;">Edit</a>
              <a href="#" class="btn btn-danger" onclick="return confirm('This blog will be deleted!')">Delete</a>
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