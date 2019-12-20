<?php
require_once('Connect.php');



$Admin_Name=$_POST['Admin_fName'];
$Admin_LastName=$_POST['Admin_LastName'];
$Admin_Email1=$_POST['Admin_Email1'];
$Admin_Password=$_POST['Admin_Password'];


if (isset($_POST['Register_management_btn']) && !empty($_POST)) {
	$insert_admin="INSERT INTO admins(Admin_fName,Admin_LastName,Admin_Email1,Admin_Password) values('$Admin_Name','$Admin_LastName','$Admin_Email1','$Admin_Password')";
	if ($conn->query($insert_admin)) {
		echo "successfull registration,WELCOME " .$Admin_Name. " " .$Admin_LastName;
		# code...
	}else {
		echo "<center><h1>THIS IS EMBARRASING AN ERROR OCCURED !!</h1>, <h6>its possible that the user have registered here before...try again with new details..Lets fix this !!<h6><center>" ;
	}
	# code...
}
?>