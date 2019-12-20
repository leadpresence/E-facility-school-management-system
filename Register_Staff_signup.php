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
  <body>
<?php
require_once ('Connect.php');
//include "header.php";

 $ssn = $_POST['ssn'];
$staff_fname = $_POST['staff_fname'];
$staff_mname = $_POST['staff_mname'];
$lname= $_POST['lname'];
$staff_start_date = $_POST['staff_start_date'];
$staff_phone_number = $_POST['staff_phone_number'];
$gender = $_POST['gender'];
$school = $_POST['school'];
$experience=$_POST['experience'];
$staff_email=$_POST['staff_email'];
$staff_password=$_POST['staff_password']; 
    


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}


$check_ext_emails="SELECT * FROM staff_table WHERE email='$staff_email'";
 
$_validate_emails=mysqli_query($conn,$check_ext_emails);//check with the select stmt
$emails_cnt=mysqli_num_rows($_validate_emails);//count duplicate  email rows
 if($_validate_emails){
if($emails_cnt>0 ){
  echo "<h4>user already exists</h4>";
}else{ 
 if (isset($_POST['register_staff_button']) && isset($_POST['ssn'])) {
$insert_staff= "INSERT INTO staff_table(ssn,
fname,
mname,
lname,
Cdate,
phone,
gender,
school,
experience,
email,
password
)
VALUES ('$ssn','$staff_fname','$staff_mname','$lname','$staff_start_date','$staff_phone_number ','$gender','$school','$experience','$staff_email','$staff_password')";
 

 
if ($conn->query($insert_staff)) {

    # code...
echo  
"<div class='alert alert-success' role='alert'>
   success  </div><body>
  <center><div class='card border-success mb-3' style='max-width: 18rem;'>
  <div class='card-header'> Congratulations   </div>
  <div class='card-body text-success'>
    <h5 class='card-title'>Dear ". $staff_fname ." ". $lname . " </h5>
    <p class='card-text'>You have registered to this portal as a staff into the  ".$school." school you can now login with your <strong>email :-". $staff_email. " and password :- ".$staff_password."</strong></p>
    <a href='/e-facility-holyfamily-takum/' class='btn btn-primary'>Login</a>
  </div>

</div></center>";

}else{
    echo "<div class='alert alert-danger' role='alert'>
  Not successful..please report to the school ICT center or call 08125990100!
" . $conn->errno . " " . $conn->error. "<a href='/e-facility-holyfamily-takum/' class='btn btn-primary'>Go back</a></div>";
    
     
 }
}
}
}
?>
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>