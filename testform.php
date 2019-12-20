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
  <a class="navbar-brand" href="Register-option.php"> <strong style="color: Green
    ">e</strong>-facility Register  </a>
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
<body>
  <form action="Register_parent_signup.php" method="post" class="form-inline">
   <input type="submit" class="btn btn-group-lg btn-info form-control" value="Login" /></form>
  </nav><!-- nav options-->
<!-- =======================---------------form starts  ======================= ------------  -->
 <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Parent Registration</div>
      <div class="card-body">

        <form  method="post" action="testform_signup.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parent_first_name">First name  [Family name/surname]</label>
                <input type="text" name="name">
              </div>
              <div class="col-md-6">
                <label for="parent_last_name">email</label>
                <input type="text" name="email">
              </div>
            </div>
          </div>
          <input type="submit" name="test">
        </form>
        <?php $a="boy";
        $b="i am";
        $c=$b ." ". $a;
        echo $c;
        ?>
      </div>
    </div>
  </div>
  </body>
  </html>
