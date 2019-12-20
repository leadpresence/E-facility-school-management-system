<?php
require_once ('Connect.php');
$name= $_POST['name'];
$email= $_POST['email'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//to check if a feild already exists
$sql= "select * from admins where Admin_Email1='$email'";
if($_validate=mysqli_query($conn,$sql)){
	$row_cnt=mysqli_num_rows($_validate);
if ($row_cnt>0) {
	 
	echo "exist<br>"; 
	echo $row_cnt;
	# code...
}else{ echo "  doesnt";}
 }
//echo $row_cnt;
?>