<?php
require_once('Connect.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
if (isset($_POST['reset_btn'])) { 
$un=$_POST['username'];
$cl=$_POST['class'];
$pw1=$_POST['newPassword1'];
$pw2=$_POST['newPassword2'];
$flag=true;
switch ($cl) {
  //select the case and check that the number of rows the email or id number is i the user table
  case 'Student':
    $q="SELECT * FROM students  WHERE student_ssn='$un'";
     $dq=mysqli_query($conn,$q);
     $check=mysqli_num_rows($dq);  
    break;
  case 'Parent':
  $q="SELECT *  FROM parent_and_gaurdians WHERE parent_mobile_number='$un'";
   $dq=mysqli_query($conn,$q);
   $check=mysqli_num_rows($dq);
  
  break;
  case 'Teacher':
  $q="SELECT * FROM staff_table WHERE email='$un'";

   $dq=mysqli_query($conn,$q);
  $check=mysqli_num_rows($dq);
  break;
  case 'Management':

    $q="SELECT * FROM admins WHERE Admin_Email1='$un'";
     $dq=mysqli_query($conn,$q);
  $check=mysqli_num_rows($dq);
        break;
  default:
  
}


if ($dq && $check =1) { 
  //if ($pw1===$pw2) {

     switch ($cl) {
       case 'Student':
         $del_pw="UPDATE students  SET student_password='$pw2' WHERE student_ssn='$un'";
         $D_query_del_pw=mysqli_query($conn,$del_pw);
         break;
       
         case 'Parent':
         $del_pw="UPDATE parent_and_gaurdians  SET parent_password ='$pw2' WHERE parent_mobile_number='$un'";
           $D_query_del_pw=mysqli_query($conn,$del_pw);
           break;
           case 'Teacher':
        $del_pw="UPDATE staff_table  SET password ='$pw2' WHERE email='$un'";
         $D_query_del_pw=mysqli_query($conn,$del_pw);
         break;
           case 'Management':
             $del_pw="UPDATE admins  SET   Admin_Password ='$pw2' WHERE Admin_Email1='$un'";
             $D_query_del_pw=mysqli_query($conn,$del_pw);
             break;
       default:
         
         
     }
     if($D_query_del_pw) { echo "<div class='alert alert-success' role='alert'>Password Reset Successfully<a href='Index.php'><button type='button' class='btn btn-sm btn-info pull-right' style='align-right'  >Login</button></a></div>"; }
     else{echo "<div class='alert alert-danger' role='alert'>Something's Wrong !... Check and Try Again</div>";}
  
//}else{echo"<div class='alert alert-danger' role='alert'>password and confirmation mismatch...Try again</div>";}

}else{echo "<div class='alert alert-danger' role='alert'>No such User !....Try Again</div>";}





}//---/if{}isset 






?> 
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
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<nav class="navbar navbar-light bg-light  ">
  <a class="navbar-brand" href="#">
    <img src="dist/img/Logo.jpg" width="30" height="30" title="Holy Family Catholic secondary schools takum" alt="Holy Family Catholic secondary schools takum " class="d-inline-block align-top" />
    <strong style="color: Green
    ">e</strong>-facility Holy family Catholic schools
  </a>
</nav>
<body class="bg-white">
   <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Password Reset</div>
      <div class="card-body">
        <form  action="" method="Post">


           <div class="form-group"> 
             <label for="username" required="true">Select User</label>
         <select id="class" name="class"class="custom-select custom-select-sm">
  <!--<option selected>Select User type</option>-->
  <OPTION>--Select--User--</OPTION>
  <option value="Student" name="class">Student</option>
  <option value="Teacher" name="class">Teacher</option> 
  <option value="Parent" name="class">Parent</option>
  <option value="Management" name="class">Management</option>
</select>

</div>  <div class="form-group">
            <label id="tell_user" for="user_SSID"> </label>
            <input class="form-control" name ="username" id = "user_SSID" type="text"     required="true">   
          </div>
          <div class="form-group">
            <label for="Password">New Password</label>
            <input class="form-control" type="password" name="newPassword1" id="newPassword1" placeholder="new password">
          </div>
          <div class="form-group">
            <label for="Confirm_Password">Confirm New Password</label>
            <input class="form-control" type="password" name="newPassword2" id="newPassword2" placeholder="Confirm password">
            <small id="message"></small>
          </div> 
          <input  type="submit" id="reset_btn"  name="reset_btn"  value="Reset Password"> </input>
        </form>

        </div>
      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
   <script src="vendor/bowe_components/select2/github/dist/i18n/select2.full.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript">
    //var user_class=getdo;
    $('#class').on('change',function(){

       if($('#class').val()=='Student'){

        $('#tell_user').html('Enter Student Unique ID number ').css('color', 'green');

}
 
        if($('#class').val()=='Teacher'){

        $('#tell_user').html('Enter Staff Unique email   ').css('color', 'green');

       }
       
 if($('#class').val()=='Parent'){

        $('#tell_user').html('Enter parent phone number ').css('color', 'green');

       }
       
 if($('#class').val()=='Management'){

        $('#tell_user').html('Enter Staff Unique email   ').css('color', 'green');

       }       
    });



     $('#newPassword1, #newPassword2').on('keyup', function () {
  if ($('#newPassword1').val() == $('#newPassword2').val()) {
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