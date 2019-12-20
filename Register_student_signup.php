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
 require_once('Connect.php');

$studentFirstname=$_POST['studentFirstname'];
$studentLastname=$_POST['studentLastname'];
$studentssn=$_POST['studentssn'];
$student_password=$_POST['student_password'];
$sex=$_POST['sex'];
$schoolAttended=$_POST['schoolAttended'];
$state=$_POST['state'];
$startingclass=$_POST['startingclass'];
$dateOfBirth=$_POST['dateOfBirth'];
$parentname=$_POST['parentname'];
$Address=$_POST['Address'];
$parent_mobile_number=$_POST['parent_mobile_number'];
$Email=$_POST['Email'];
$occupation=$_POST['occupation'];
$placeofoccupation=$_POST['placeofoccupation'];
//-----------------------
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
//checks this student has been registered before


    if (isset($_POST['enrol_student_button']) && isset($_POST) && !empty($_POST)) {
      # code...
      $insertstudent= "INSERT INTO students(student_ssn,
schoolAttended,
studentFirstname,
studentLastname,
student_password,
sex,
state,
startingclass,
dateOfBirth,
parentname,
Address,
parent_mobile_number,
Email,
occupation,
placeofoccupation) 
VALUES('$studentssn',
'$schoolAttended',
'$studentFirstname',
'$studentLastname',
'$student_password',
'$sex',
'$state',
'$startingclass',
'$dateOfBirth',
'$parentname',
'$Address',
'$parent_mobile_number',
'$Email',
'$occupation',
'$placeofoccupation')";
 if ($conn->query($insertstudent)) {
   # code...
 
echo  
"<div class='alert alert-success' role='alert'>
   success  </div><body>
  <center><div class='card border-success mb-3' style='max-width: 18rem;'>
  <div class='card-header'> Congratulations   </div>
  <div class='card-body text-success'>
    <h5 class='card-title'>Dear ".$studentFirstname." ".$studentLastname. " </h5>
    <p class='card-text'>You have registered to this portal as a student into  ".$startingclass." you can now login with your <strong>SSID :-".$studentssn." and password :-".$student_password."</strong></p>
    <a href='/e-facility-holyfamily-takum/' class='btn btn-primary'>Login</a>
  </div>

</div></center>";

}else{

  echo "<div class='alert alert-danger' role='alert'>
  Not successful..please report to the school ICT center or call 08125990100!
" . $conn->errno . " " . $conn->error. "<a href='/e-facility-holyfamily-takum/' class='btn btn-primary'>Go back</a></div>";
    }
    
}

?>
</body>
</html>