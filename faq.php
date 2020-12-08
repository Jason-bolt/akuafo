<?php
  $page = 'faq';
  include('assets/layouts/header1.php');
?>

  <main id="main">

    <div class="container">
      <h1 class="text-center py-4">
        FAQs
      </h1>
    </div>

    <!-- Page Content -->
    <div class="container">

      <h4>How do I join the platform?</h4>
      <p>This platform is a farmer based system, as such actors who can take part are farmers, input suppliers and all persons interested in purchasing raw produce. To join the platform click on the register button and fill the form.</p>

    </div>
    <!-- /.container -->

  </main><!-- End #main -->

<?php include('assets/layouts/footer.php'); ?>

<script type="text/javascript">

  function validate(){
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var subject = document.getElementById("phone").value;
    var message = document.getElementById("message").value;
    
    if (firstName.trim() == "" && lastName.trim() == "" && subject.trim() == "" && message.trim() == ""){
      var requiredLabel = document.getElementById("required");
      requiredLabel.style.display = "block";
      return false;
    }
    // var message = document.getElementById("complaint_message").value;
    // if (message.trim() == ""){
    //   alert("Message cannot be empty!");
    //   return false;
    // }

    return true;
  }
  
</script>