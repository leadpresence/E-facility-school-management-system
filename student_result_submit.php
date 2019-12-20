<?php 
require_once('Connect.php');
// a teacher i should be able to submit student result per student D and per subject i teach
$Student_SSN=$_POST['Student_SSN'];
$Teachers_Name=$_POST['Teachers_Name'];
$staff_Id=$_POST['staff_Id'];
$Class=$_POST['Class'];
$Subject=$_POST['Subject'];
$term=$_POST['term'];
$Academic_Year=$_POST['Academic_Year'];
$First_CA=$_POST['First_CA'];
$Second_CA=$_POST['Second_CA'];
$Exam=$_POST['Exam'];
$Subject_total=$_POST['Subject_total'];
$Subject_Grade=$_POST['Subject_Grade'];
$Subject_position=$_POST['Subject_position'];
$subject_Ave=$_POST['subject_Ave'];
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
 //get student lastname from sregister student
$student_lastname_with_ID="SELECT studentLastname FROM students WHERE student_ssn='$Student_SSN'";
//check if the staff is a registered staff
$validate_staff_id="SELECT ssn FROM staff_table WHERE ssn='$staff_Id' ";
//check if the student ID is existing as a registered student
$validate_Student_SSN="SELECT student_ssn FROM students WHERE student_ssn='$Student_SSN'";
//enter resultof a single student
//query
$sql_submit_result="INSERT INTO results (ssn,Subject_staff_Id,subject_teacher_name,Student_Name,Subject,first_CA,second_CA,Exam,Subject_total_marks,Class,Academic_year,term,Subject_Position,Grade,Subject_average) 
VALUES('$Student_SSN','$staff_Id','$Teachers_Name','$student_lastname_with_ID','$Subject','$First_CA','$Second_CA','$Exam','$Subject_total','$Class','$Academic_Year','$term','$Subject_position','$Subject_Grade','$subject_Ave')";
//enter result of a single student provided the staff is register and student is registered
if ( $validate_staff_id && $Student_SSN) {
	$query=mysqli_query($conn,$sql_submit_result);

 if ($conn->query($query)) {//what happens if its submitted or Not
 	
 	# code...
 	echo "Result submitted";
 
	
}
else{ echo "An error occurred kindly check the staff_Id and Student_SSN again";
}
}
?>
