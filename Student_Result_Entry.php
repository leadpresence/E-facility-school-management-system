 
<?
 
                session_start();
            
?>
 <!DOCTYPE html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Result-Entry Holy Family Catholic Schools Takum</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
 
  <!-- Theme style -->

  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
   
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<?php 

require_once('Connect.php');
// a teacher i should be able to submit student result per student D and per subject i teach
if (isset($_POST['Submit_Result'])) {
  # code...

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
$student_lastname_with_ID="SELECT studentLastname, studentFirstname FROM students WHERE student_ssn='$Student_SSN' ";//stament to get last name
$D_query_student_lastname_with_ID=mysqli_query($conn,$student_lastname_with_ID);//query with mysql
$row=mysqli_fetch_assoc($D_query_student_lastname_with_ID);//get the specific record in form of an associative array
$lname=$row['studentLastname'];//get attribute  required from the record ie student Last name
//---------------------------------------
$student_firstname_with_ID="SELECT studentFirstname FROM students WHERE student_ssn='$Student_SSN'";//stament to get 1st name
$D_query_student_firstname_with_ID=mysqli_query($conn,$student_firstname_with_ID);//query with mysql
$row=mysqli_fetch_assoc($D_query_student_firstname_with_ID);//get the specific record in form of an associative array
$fname=$row['studentFirstname'];//get attribute  required from the record ie student 1stname
//---------------------------------------
//student full name    
$full_name= $fname ." ". $lname;
//---------------------------------------
//check if the staff is a registered staff
$validate_staff_id="SELECT ssn FROM staff_table WHERE ssn='$staff_Id'";
$D_query_alidate_staff_id=mysqli_query($conn,$validate_staff_id);
//-------------------------------------------
//check if the student ID is existing as a registered student
$validate_Student_SSN="SELECT student_ssn FROM students WHERE student_ssn='$Student_SSN'";
$D_query_validate_Student_SSN=mysqli_query($conn,$validate_Student_SSN);
//---------------------------------------------------
//enter resultof a single student
//query----------------------------------------------------
$sql_submit_result="INSERT INTO results (ssn,Subject_staff_Id,subject_teacher_name,Student_Name,Subject,first_CA,second_CA,Exam,Subject_total_marks,Class,Academic_year,term,Subject_Position,Grade,Subject_average) 
VALUES('$Student_SSN','$staff_Id','$Teachers_Name','$full_name','$Subject','$First_CA','$Second_CA','$Exam','$Subject_total','$Class','$Academic_Year','$term','$Subject_in_position','$Subject_Grade','$subject_Ave')";
//-----------------------------------------------------------------
//enter result of a single student provided the staff is register and student is registered
if ( $D_query_alidate_staff_id && $D_query_validate_Student_SSN){ 
  
  $sql_submit_result="INSERT INTO results (ssn,Subject_staff_Id,subject_teacher_name,Student_Name,Subject,first_CA,second_CA,Exam,Subject_total_marks,Class,Academic_year,term,Subject_Position,Grade,Subject_average) 
VALUES('$Student_SSN','$staff_Id','$Teachers_Name','$full_name','$Subject','$First_CA','$Second_CA','$Exam','$Subject_total','$Class','$Academic_Year','$term','$Subject_position','$Subject_Grade','$subject_Ave')";
 
  //what happens if its submitted or Not
 if ($conn->query($sql_submit_result)) {
  
  # code...
  echo "<div class='alert alert-success' role='alert'>success ! Result entered  </div>" ;
}
else{ echo "<div class='alert alert-danger' role='alert'>failed-->" . $conn->error. "</div>" ;
}
}//--/if{} all  is validated
}//--/if{} submit button is clicked
?>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HF</b>TK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">e-facility<br>Holy Family Catholic Schools Takum</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
           
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Welcome<?php if(!isset($_SESSION['user_full_name'])){echo ",Howdy";}elseif (isset($_SESSION['user_full_name'])) {
                echo " ".$_SESSION['user_full_name'];} ?></span>
            </a>
             
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
   

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Holy family<br>Schools Takum</p>
          <!-- Status -->
           
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Academics</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Timetable.html"><i class="fa fa-calendar"></i> <span>Timetable</span></li></a>
             
          </ul>
        </li>
         
        <li><a href="#"><i class="fa fa-share-square"></i> <span>Information items</span></a></li>
        <li><a href="#"><i class="fa  fa-balance-scale"></i> <span>Prospectus</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      
      <h1>
      Result-Entry <br><br>
        <small><em>Enter the Student ID/SSN number and Corresponding result Result </em></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Result-Entry</a></li>
        <li class="active">Academic Result</li>
      </ol>
   
    </section>
   <section class="content">
        <div class="row">
            <div class="col-md-6">
           <div class="box box-primary">
    <!--------------------------------- Main content ---------------------------------- -->
  
    
                <form  role="form" class="form-horizontal" name="frm_student" method="POST" action="">
                   <div class="box-body">
                <div class="form-group">
                  <label for="Student SSN" class="col-sm-6 control-label">Student's SSN</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="Student_SSN" id="Student SSN" placeholder="Student SSN" required="true"><small>Ensure you enter the correct student ID number</small>
                  </div>
                </div>
             <div class="form-group">
                  <label for="Teachers_Name" class="col-sm-6 control-label">Teacher's name</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" onclick="" name="Teachers_Name" id="Teachers_Name" placeholder="Enter Teacher's name" required="true">
                  </div>
                </div>
                    <div class="form-group">
                  <label for="staff_Id" class="col-sm-6 control-label">Staff ID</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"   name="staff_Id" id="staff_Id" placeholder="Enter Staff ID numer" required="true">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Class" class="col-sm-6 control-label">Class</label>
 
                  <div class="col-sm-6">
                    <select required="true" name="Class" class="form-control" required="true">
                      <?php 
$_classes=array('nur1'=>'nusery1','nur2'=>'nusery2','nur3'=>'nusery3',
                  'pr1'=>'primary1','pr2'=>'primary2',
                  'pr3'=>'primary3','pr4'=>'primary4',
                  'pr5'=>'primary5','pr6'=>'primary6',
                  'jss1A'=>'jss oneA','jss1B'=>'jss oneB','jss2A'=>'jss twoA','jss2B'=>'jss two B',
                  'jss3A'=>'jss three A',  'jss3B'=>'jss three B',
                  'ss1A'=>'ss one A','ss1B'=>'ss oneB','ss2A'=>'ss twoA','ss2B'=>'ss twoB',
                  'ss3A'=>'ss three A','ss3B'=>'ss three B');

                  foreach ($_classes as $class_key => $class_value) {
                   # code...
                    echo '<option  selected="selected" value="'.$class_key.'">'.$class_key.' </option>';
                 } ?> </select>
                   
                  </div>
                </div>
                    <div class="form-group">
                  <label for="Subject" class="col-sm-6 control-label">Subject</label>

                  <div class="col-sm-6">
                    <select required="true" name="Subject" class="form-control" required="true">
                       <option>--Select-Subject--</option>
                            <option>AGRICULTURAL SCIENCE</option>
                            <option>ANIMAL HUSBANDRY</option>
                            <option>BIOLOGY</option>
                            <option>BUSINESS STUDIES</option>
                             <option>BASIC SCIENCE</option>
                            <option>BASIC TECHNOLOGY</option>
                            <option>CHEMISTRY</option>
                            <option>CIVIC EDUCATION</option>
                            <option>COMPUTER STUDIES</option>
                            <option>CATHOLIC DOCTRINE</option>
                            <option>C.R.S</option>
                            <option>ENGLISH LANGUAGE</option>
                            <option>ECONOMICS  </option>
                            <option>FRENCH</option>
                            <option>GEOGRAPHY</option>
                            <option>GOVERNMENT</option>
                            <option>HOME ECONOMICS  </option>
                            <option>LITERATURE-IN-ENGLISH</option>
                            <option>MATHEMATICS</option>
                            <option>MARKETING</option>
                            <option>PHYSICS</option>
                            <option>SOCIAL STUDIES</option>
 

 

</select>
                   
                  </div></div>
                
                <div class="form-group">
                  <label for="Term" class="col-sm-6 control-label">Term</label>

                  <div class="col-sm-6">
                    <select required="true" class="form-control" name="term" required="true">
                      <option>Select-term</option>
                      <option value="1st term">1st term</option>
                      <option value="2nd term">2nd term</option>
                      <option value="3rd term">3rd term</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Academic_Year" class="col-sm-6 control-label">Academic Year</label>

                  <div class="col-sm-6">
                    <select class="form-control" required="true" id="Academic_Year" name="Academic_Year" required="true">
                      
                      <?php 
                      for($year=2018; $year < 2029 ;$year++){
                         echo '<option  selected="selected" value="'.$year.'">'.$year.'</option>';
                      }
                       ?>
                      }
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="First_CA" class="col-sm-6 control-label">First C/A Score</label>

                  <div class="col-sm-6">
                    <Select type="number" required="true" class="form-control" name="First_CA" id="First_CA" placeholder="First CA score"> <option>0</option>

                      <?php 
                      for($first_ca=1; $first_ca < 21 ;$first_ca++){
                         echo '<option  selected="selected" value="'.$first_ca.'">'.$first_ca.'</option>';
                      } ?>
                    </Select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Second_CA" class="col-sm-6 control-label">Second C/A Score</label>

                  <div class="col-sm-6">
                     <Select type="number" class="form-control" name="Second_CA" id="Second_CA" placeholder="Second_CA">
                      <option>0</option>
                      <?php 
                      for($second_CA=1; $second_CA < 21 ;$second_CA++){
                         echo '<option  selected="selected" value="'.$second_CA.'">'.$second_CA.'</option>';
                      } ?>
                    </Select>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="Exam" class="col-sm-6 control-label">Exam Score</label>

                  <div class="col-sm-6">
                    
 <Select type="number" class="form-control" name="Exam" id="Exam" placeholder="Exam">
  <option>0</option>
                      <?php 
                      for($second_CA=0; $Exam < 61 ;$Exam++){
                         echo '<option  selected="selected" value="'.$Exam.'">'.$Exam.'</option>';
                      } ?></Select>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="Subject_total" class="col-sm-6 control-label">Total Marks</label>

                  <div class="col-sm-6">
                    
                    <input type="text" name="Subject_total" id="Subject_total" class="form-control" placeholder="exam+first C/a + second C/A">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="Subject_Grade" class="col-sm-6 control-label">Subject Grade</label>

                  <div class="col-sm-6">
                    <select required="true" name="Subject_Grade" class="form-control" required="true">
                      
 <option>-select grade-</option>
 <option>A</option>
 <option>B</option>
 <option>C</option>
 <option>D</option>
 <option>E</option>
 <option>F</option>
  
</select>
                   
                  </div></div>
                  <div class="form-group">
                  <label for="subject_Ave" class="col-sm-6 control-label">Class Average</label>

                  <div class="col-sm-6">
                    
                    <input type="text" name="subject_Ave" id="subject_Ave" class="form-control" placeholder="enter class average for subject">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="Subject_position" class="col-sm-6 control-label">Subject position</label>

                  <div class="col-sm-6">
                     <Select type="number" class="form-control" name="Subject_position" id="Subject_position" placeholder="$position">
                      <?php 

                      $postion_array = array('1' =>'1st' ,'2' =>'2nd' ,'3' =>'3rd' ,'4' =>'4th' ,'5' =>'5th' ,'6' =>'6th' ,'7' =>'7th' ,'8' =>'8th' ,'9' =>'9th' ,'10' =>'10th','11' =>'11th' ,'12' =>'12th' ,'13' =>'13th' ,'14' =>'14th' ,'15' =>'15th' ,'16' =>'16th' ,'17' =>'17th' ,'18' =>'18th' ,'19' =>'19th' ,'20' =>'20th','21' =>'21st' ,'22' =>'22nd' ,'23' =>'23rd' ,'24' =>'24th' ,'25' =>'25th' ,'26' =>'26th' ,'27' =>'27th' ,'28' =>'28th' ,'29' =>'29th' ,'30' =>'30th', '31' =>'31st' ,'32' =>'32nd' ,'33' =>'33rd' ,'34' =>'34th' ,'35' =>'35th' ,'36' =>'36th' ,'37' =>'37th' ,'38' =>'38th' ,'39' =>'39th' ,'40' =>'40th','41' =>'41st' ,'42' =>'42nd' ,'43' =>'43rd' ,'44' =>'44th' ,'45' =>'45th' ,'46' =>'46th' ,'47' =>'47th' ,'48' =>'48th' ,'49' =>'49th' ,'50' =>'50th','51' =>'51st' ,'52' =>'52nd' ,'53' =>'53rd' ,'54' =>'54th' ,'55' =>'55th' ,'56' =>'56th' ,'57' =>'57th' ,'58' =>'58th' ,'59' =>'59th' ,'60' =>'60th',  );
                      foreach ( $postion_array as $key => $value) {
                        # code...
                        echo '<option  selected="selected" value="'.$value.'">'.$value.'</option>';
                      }
                         
                      ?></Select>
                  </div>
                </div>

          
              <!-- /.box-body -->
  <div class="form-gorup">
         <!--<div style="text-align:left;">
          <button type="submit" style="width: 170px" name="Update_result" id="firstenrol" class="btn btn-sm btn-info"   >Update student Result <strong>?</strong></button> 
          </div> -->
              
        <div style="text-align: center;">
          <button type="submit" style="width: 170px" name="Submit_Result" id="firstenrol" class="btn btn-sm btn-info"  >Submit</button> 
        </div>  
      </div>
                
              <!-- /.box-footer -->
            </form>
</div>
 </div>
     <!--<div class="row"></div>-->
  
   </div>

   <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <p class="box-body has-error"><i class="fa fa-bell-o"></i>    <br>kindly ensure all entries have been thouroughly corrected before submission.<br> Any update on submissions may require you to call support</p>
            </div>
          </div></div>
</section>
 
         </div>

 <!--------------------------------- Main content ---------------------------------- -->
<footer class="main-footer">  <h3>User Support</h3>Call: <small>08061272442</small><br><strong>Copyright &copy; 2018 <a href="#">Holy family Schools,Takum-Taraba state</a>....</strong> All rights reserved.
  </footer>
<!-- REQUIRED JS SCRIPTS -->

<!-- --jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script   src="../../bower_components/bootstrap/js/alert.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
 
 
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
      
 
 
 $("#Subject_total").on("click",function(){
var _fac= parseInt($("#First_CA").val());
var _sca=parseInt($("#Second_CA").val());
var _ex=parseInt($("#Exam").val());

tot= _fac + _sca + _ex;
$("#Subject_total").val(tot);
alert("Total marks calculated as:" + tot );
var stud_grade="--";
  switch (stud_grade) {
case: tot <=29;
stud_grade="F";
case: tot <=39;
stud_grade="E";
case: tot <=49;
stud_grade="D";
case: tot <=59;
stud_grade="C";
case: tot <=69;
stud_grade="B";
case: tot <=79;
stud_grade="A";
default;
stud_grade="A";}
//alert("Total mark calculated as:" + stud_grade );

 });

  function mirror(){ alert("1122334");}
</script>
<!-- page script -->
</body>
</html>
