<?php
  $page = 'profile';
  include('assets/layouts/header3.php');
?>

  <main id="main">

    <div class="container">
      <h1 class="text-center py-4">
        Profile
      </h1>
    </div>

    <!-- Page Content -->

    <div class="container">

    <!-- Blogs -->
    <div class="row">
        
        <div class="container">
          <div class="card">
            <div class="card-body">
              <form class="form-row" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                  <label>Blog Heading</label>
                  <input type="text" class="form-control" id="blog_heading" name="blog_heading" value="Blog heading">
                </div>

                <div class="form-group col-md-12">
                  <label>Blog content <small class="text-info">(Blog will be displayed exactly how it is typed!)</small></label>
                  <textarea class="form-control" id="blog_content" name="blog_content" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                </div>
                
                <!-- Submit button -->
                <div class="form-group">
                  <input type="submit" class="btn" style="background-color: green; color: #fff;" id="project_submit" name="edit_submit" value="Edit">
                </div>
              </form>
            </div>
          </div>
        </div>

    </div>

    <a href="blogger_profile.php" class="btn my-3" style="background-color: green; color: #fff;">Back to profile</a>
      <!-- /.row -->
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