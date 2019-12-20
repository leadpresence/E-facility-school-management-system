 
<?php

session_start(); ?>
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
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<?php

 
require_once('Connect.php');
if (isset($_POST['Login'])) {
  

$class_value=$_POST['class'];
$username_val=$_POST['username'];
$password_val=$_POST['password'];
//----------------------------------------------------------

//check if the value of class is student then check if the username(i.e ssn) and password correspond to that in 
//data base
//STUDENT
if ($class_value=='Student') {
  //check student in db
  $sql_student="SELECT * FROM students WHERE student_ssn='$username_val' AND student_password='$password_val'";
  $D_query=mysqli_query($conn,$sql_student);
  $s_row=mysqli_fetch_assoc($D_query);
$student_fn=$s_row['studentFirstname'];
$student_ln=$s_row['studentLastname'];
$s_full_n=$student_fn ." ". $student_ln;
 $_SESSION['user_full_name']=$s_full_n;
              if ($D_query) {
                $_SESSION['Username']=$_POST['username'];
                $_SESSION['class']=$class_value;
              $_SESSION['Username']=$username_val;
             $_SESSION['user_full_name']=$s_full_n;

                header('Location:header.php');
            }
}//--/ IF {} STUDENT
//----------------------------------------------------------
//TEACHER
if ($class_value=='Teacher') {
  $sql_teacher="SELECT * FROM staff_table WHERE email='$username_val' AND password='$password_val'";
  $D_query_teacher=mysqli_query($conn,$sql_teacher);
 
  $row=mysqli_fetch_assoc($D_query_teacher);
 $staff_lastname=$row['lname'];
 $staff_firsttname=$row['fname'];
 $full_n=$staff_lastname ." ". $staff_firsttname;
            if ($D_query_teacher) {
              $_SESSION['class']=$class_value;
              $_SESSION['Username']=$username_val;
             $_SESSION['user_full_name']=$full_n;
              header('Location:header.php'); 
          
          }
 } //--/ IF {}  TEACHER
 //----------------------------------------------------------
   if ($class_value=='Parent') {
    $sql_Parent="SELECT * FROM parent_and_gaurdians WHERE parent_mobile_number='$username_val' AND parent_password='$password_val'";
    $D_query_parent=mysqli_query($conn,$sql_Parent);
    $p_row=mysqli_fetch_assoc($D_query_parent);
    $p_fname=$p_row['parent_firstname'];
    $p_lname=$p_row['parent_lastname'];
    $p_full=$p_fname ." " .$p_lname;
              if($D_query_parent) {
                $_SESSION['class']=$class_value;
              $_SESSION['Username']=$username_val;
             $_SESSION['user_full_name']= $p_full;
              header('Location:header.php'); 
                
              }
    
   }//--/if{} PARENT
//----------------------------------------------------------
   if ($class_value=='Management') {
    $mg_sql=" SELECT * FROM  admins WHERE Admin_Email1='$username_val' AND Admin_Password ='$password_val'";
    $D_query_mg=mysqli_query($conn,$mg_sql);
    $row_mg=mysqli_fetch_assoc($D_query_mg);
    $mg_fn=$row_mg['Admin_fName'];
    $mg_ln=$row_mg['Admin_LastName'];
    $mg_full=$mg_fn ." ". $mg_ln;

              if ($D_query_mg) {
               $_SESSION['class']=$class_value;
              $_SESSION['Username']=$username_val;
             $_SESSION['user_full_name']= $mg_full;
              header('Location:header.php');  
              
              }
     # code...
   }//--/if{} MANAGEMENT


//----------------------------------------------------------


}//----if Login isset
?>


 
 
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
      <div class="card-header">HFCSSTK Login</div>
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

</div> 
          <div class="form-group">
            <label id="tell_user" for="user_SSID"> </label>
            <input class="form-control" name ="username" id = "user_SSID" type="text"     required="true">   
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
          </div> 
         
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="Remember_Password"> Remember Password</label>
            </div>
          </div>
          <input type="submit" name="Login" value="Login" class="btn btn-group-lg btn-info form-control"/>
         <!-- <a class="btn btn-primary btn-block" href="#">Login</a>-->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="Register-option.php">Register an Account</a>
          <a class="d-block small" href="forgot_password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Bootstrap core JavaScript-->
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



  </script>
</body>

</html>
