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
  <a class="navbar-brand" href="Register-option.php"> <img src="dist/img/Logo.jpg" width="30" height="30" title="Holy Family Catholic secondary schools takum" alt="Holy Family Catholic secondary schools takum " class="d-inline-block align-top" /><strong style="color: Green
    "> e</strong>-facility  Register  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
 <div class="collapse navbar-collapse justify-content-between"  id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-item nav-link disabled" href="#">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Parent </a>
      </li>
<li class="nav-item">
        <a class="nav-item nav-link " href="Register_management">Management<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>  <form action="Index.php" method="post" class="form-inline">
   <input type="submit" class="btn btn-group-lg btn-info form-control" value="Login" /></form>
  </nav><!-- nav options-->
 <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Administrative Registration</div>
      <div class="card-body">
        <!--\/\/\/\\/\/\/\/\/\/\/\/form-->
        <form action="Register_management_signup.php" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Admin_fName">First name</label>
                <input class="form-control" id="Admin_fName" type="text" name="Admin_fName" placeholder="Enter first name" required="true">
              </div>
              <div class="col-md-6">
                <label for="Admin_LastName">Last name</label>
                <input class="form-control" id="Admin_LastName" name="Admin_LastName" type="text" aria-describedby="nameHelp" required="true" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="Admin_Email1">Email address</label>
            <input class="form-control" id="Admin_Email1" name="Admin_Email1" type="email"  " placeholder="Enter email" required="true">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Admin_Password">Password</label>
                <input class="form-control" id="Admin_Password" name="Admin_Password" type="password" placeholder="Password" required="true">
              </div>
              <div class="col-md-6">
                <label for="Admin_ConfirmPassword">Confirm password</label>
                <input class="form-control" name="Admin_ConfirmPassword"  id="Admin_ConfirmPassword" type="password" placeholder="Confirm password" required="true">
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="Register_management_btn"  type="submit">Register</button>
        </form>
        <div class="text-center">
           
           
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>