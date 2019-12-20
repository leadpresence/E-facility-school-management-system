 

 <!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <script defer src="vendor/static/svg-with-js/js/fontawesome-all.js"></script>
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
        <a class="nav-item nav-link" href="#">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Parent <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Management</a>
      </li>
    </ul>
  </div>  <form action="Index.php" method="post" class="form-inline">
   <input type="submit" class="btn btn-group-lg btn-info form-control" value="Login" /></form>
  </nav><!-- nav options-->
 <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Staff Registration</div><strong style="color: red">*All fields are required*</strong> 
      <div class="card-body">
        <form method="Post" action="Register_Staff_signup.php">
        
          <div class="form-group">
            <div class="form-row">
              <div class="form-group">
            <label for="ssn">Staff Unique ID :</label> 
 
            <input class="form-control form-control-sm" name="ssn" id="ssn" name="ssn" type="text" aria-describedby="textHelp" placeholder="Staff Unique ID" required="true"><button name="generateSSID" aria-hidden="true" type="button" class="btn btn-info  form-control-sm"><span class="fas fa-key"></span></button>
            <small id="passwordHelpInline" class="text-muted">
    <?php 
 //require_once('RandomString.php');    

    function RandomString($length = 6) {
    $randstr="";
    srand((double) microtime() * 1000000);
    //our array add all letters and numbers if you wish
    $chars = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
        'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
        '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
        'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

    for ($rand = 0; $rand <= $length; $rand++) {
        $random = rand(0, count($chars) - 1);
        $randstr .= $chars[$random];
    }
    return $randstr;
    
}
if(isset($_GET['ssn'])){
  RandomString();}
 echo "<strong>This is your unique ID and username (TYPE IN/COPY)   " . RandomString();
//}

   ?> 
    </small>
          </div>





        </div>
           <div class="form-row">
              <div class="col-md-6">
                <label for="fname">First name</label>
                <input class="form-control form-control-sm" id="staff_fname" name="staff_fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required="true">
              </div>
               <div class="col-md-6">
                <label for="mname">Middle name</label>
                <input class="form-control form-control-sm" id="mname"  name="staff_mname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required="true">
              </div>
              <div class="col-md-6">
                <label for="lname">Last name</label>
                <input class="form-control form-control-sm" id="lname" name="lname" type="text"   placeholder="Enter last name" required="true">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Cdate">Date Of Commencement</label>
                <input class="form-control form-control-sm" id="Cdate"  name="staff_start_date" type="date" required="true" >
              </div>
              <div class="col-md-6">
                <label for="phone">phone</label>
                <input class="form-control form-control-sm" id="phone"  name="staff_phone_number" type="phone"   placeholder="direct line most preffered" required="true" />
              </div>
              </div>
            </div>
            <div class="form-group">

  

<div class="form-row form-row align-items-center">
              <div class="form-group col-auto my-1">
                <label for ="gender">Gender:</label>
              <div class="form-check form-check-inline"> 

                   <input class="form-check-input" name="gender" type="Radio" id="Male" value="Male">
                <label class="form-check-label" for="Male">Male</label>
              </div>
               <div class="form-check form-check-inline">
                <input class="form-check-input" name="gender" type="Radio" id="Female" value="Female">
                <label class="form-check-label"  for="Female">Female</label>
              </div>
            </div>
  <div class="form-group col-md-3 col-auto my-1">
<label for ="school">School:</label>
<select name="school" class="custom-select custom-select-sm col">
  <!--<option selected>Select User type</option>-->
  <option selected>Choose...</option>
  <option value="Primary"  >Primary</option>
  <option value="Primary"  >Secondary</option> 
   
</select>
</div>
 
 <div class="form-group col-md-3 col-auto my-1">
<label for ="school">Year of Experience</label>
<select name="experience" class="custom-select custom-select-sm col">
  <!--<option selected>Select User type</option>-->
<?php
//$_experience=0;
for ($_experience=0; $_experience<21 ; $_experience++) { 
  echo '<option selected="selected"  value="'.$_experience.'"" >'.$_experience.'</option>' ;

}
  ?> 
</select>
</div>

</div>

</div>
          <div class="form-group">        
            <label for="staff_email">Email address</label>
            <input class="form-control form-control-sm" id="staff_email" name="staff_email" type="email" aria-describedby="emailHelp" placeholder="Enter email" required="true">
          </div>
          <div class="form-group">
            <div class="form-row">

              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control form-control-sm" name="staff_password" id="staff_password" type="password" placeholder="Password" required="true">
                <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long. and will be used for Loging In.we suggest you write your password down before submitting
    </small>
              </div>
              <div class="col-md-6">
                <label for="confirm_password onfirm_password">Confirm password</label>
                <input class="form-control form-control-sm" name="staff_confirm_password" id="staff_confirm_password" type="password" placeholder="Confirm password" required="true">
                <small id="message">
       
    </small>
              </div>
            </div>
          </div>

          <center> <input style="width: 170px" type="submit" id="register_staff_button" name="register_staff_button" value="Register" class="btn btn-group-lg btn-info form-control"/></center>
        </form>

          
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript">
  


  $('#staff_password, #staff_confirm_password').on('keyup', function () {
  if ($('#staff_password').val() == $('#staff_confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    //$('#register_staff_button').prop("disabled",false)
  } else 
    $('#message').html('Not Matching').css('color', 'red');
    //$('#parent_register_button').prop("disabled",true);

}
);  
 
</script>
</body>

</html>