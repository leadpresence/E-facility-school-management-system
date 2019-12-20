 <!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>e-facility Holy fmily schools takum</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="vendor/sb-admin.css" rel="stylesheet"></head>


<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">




<nav class="navbar navbar-expand-lg navbar-light justify-content-between bg-light">
  <a class="navbar-brand" href="Register-option.php">  <img src="dist/img/Logo.jpg" width="30" height="30" title="Holy Family Catholic secondary schools takum" alt="Holy Family Catholic secondary schools takum " class="d-inline-block align-top" /><strong style="color: Green
    "> e</strong>-facility Register  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
 <div class="collapse navbar-collapse justify-content-between"  id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">Student </a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link " href="#">Parent<span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Management</a>
      </li>
    </ul>
  </div>

  <form action="Register_parent_signup.php" method="post" class="form-inline">
   <input type="submit" class="btn btn-group-lg btn-info form-control" value="Login" /></form>
  </nav><!-- nav options-->
<!-- =======================---------------form starts  ======================= ------------  -->
 <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Parent Registration</div>
      <div class="card-body">

        <form  method="post" action="Register_parent_signup.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parent_first_name">First name  [Family name/surname]</label>
                <input class="form-control" name="parent_first_name" id="parent_first_name" type="text" placeholder="Enter surname/family name" required="true">
              </div>
              <div class="col-md-6">
                <label for="parent_last_name">Last name</label>
                <input class="form-control" id="parent_last_name" name="parent_last_name" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required="true">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="parent_mobile_number">Phone Number</label>
            <input class="form-control" id="parent_mobile_number" name="parent_mobile_number" type="phone"  placeholder="0xxxxxxxx" required="true">
             <small id="passwordHelpInline" class="text-muted">
      This number would be used as your unique username
    </small>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
               <input class="form-control" name="parent_password" id="parent_password" type="password" placeholder="Password" required="true">
                 <small id="passwordHelpInline" class="text-muted">
      Please  write your password down ...
    </small>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" name="parent_confirm_password" id="parent_confirm_password" type="password" placeholder="Confirm password" required="true">
<small id="message">
       
    </small>
              </div>
            </div>
          </div>
          <button name="parent_register_button" id="parent_register_button" type="submit" class="btn btn-primary btn-block" href="Index.php">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
           
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
<script type="text/javascript">//document.getElementById("parent_register_button").disabled = true;</script>
<!-- Validate password -->
<script type="text/javascript">
  


  $('#parent_password, #parent_confirm_password').on('keyup', function () {
  if ($('#parent_password').val() == $('#parent_confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    $('#parent_register_button').prop("disabled",false);
  } else 
    $('#message').html('Not Matching').css('color', 'red');
    //$('#parent_register_button').prop("disabled",true);

}
);  
 
</script>

</html>