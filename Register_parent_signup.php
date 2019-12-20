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



 

<?php
require_once ('Connect.php');
//include "header.php";

$parent_first_name=$_POST['parent_first_name'];
$parent_last_name=$_POST['parent_last_name'];
$parent_mobile_number=$_POST['parent_mobile_number'];
$parent_password=$_POST['parent_password'];
$parent_confirm_password=$_POST['parent_confirm_password'];

//session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
if (isset($_POST) && !empty($_POST)) {
	 	# code...
	$insertparent = "INSERT INTO Parent_and_Gaurdians(parent_firstname,parent_lastname,parent_mobile_number,parent_password,parent_confirm_password) VALUES ('$parent_first_name','$parent_last_name','$parent_mobile_number','$parent_password','$parent_confirm_password')";

$conn->query($insertparent); 
   
 echo "<div class='alert alert-success' role='alert'>
   success  </div><body>
  <center><div class='card border-success mb-3' style='max-width: 18rem;'>
  <div class='card-header'> Congratulations </div>
  <div class='card-body text-success'>
    <h5 class='card-title'>Dear ".$parent_first_name." ".$parent_last_name. " </h5>
    <p class='card-text'>You have register to this portal as a parent/gaurdian you can now login</p>
    <a href='/e-facility-holyfamily-takum/' class='btn btn-primary'>Login</a>
  </div>

</div></center>";
} else
{
    echo "<div class='alert alert-danger' role='alert'>
  This is a danger alert—check it out!
" . $conn->errno . " " . $conn->error. "<a href='/e-facility-holyfamily-takum/' class='btn btn-primary'>Go back</a></div>";
}?>
 
 
</body> 
</html>
 
  