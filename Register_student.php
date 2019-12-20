
<? session_start();?>
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
 <script defer src="vendor/static/svg-with-js/js/fontawesome-all.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">




<nav class="navbar navbar-expand-lg navbar-light justify-content-between bg-light">
  <a class="navbar-brand" href="Register-option.php">  <img src="dist/img/Logo.jpg" width="30" height="30" title="Holy Family Catholic secondary schools takum" alt="Holy Family Catholic secondary schools takum " class="d-inline-block align-top" /><strong style="color: Green
    "> e</strong>-facility Register  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-- NAV --<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
 <div class="collapse navbar-collapse justify-content-between"  id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Student <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">parent</a>
      </li>
<li class="nav-item">
        <a class="nav-item nav-link disabled" href="#">Management</a>
      </li>
    </ul>
  </div>
  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-- NAV --<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
  <form action="Index.php" method="POST" class="form-inline">
   <input type="submit" class="btn btn-group-lg btn-info form-control" value="Login" /></form>
  </nav><!-- nav options-->
 <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header" style="color: green">Student Registration <h6 style="color:red">Fields marked * are required</h6></div>
      <div class="card-body">
        
<div class="container">

     
  <div class="col-lg-12 well">
  <div class="row">
        <form id="registrationForm"  method="POST" action="Register_student_signup.php">
            
            <div><h2 style="color: green"> Student Data <i class="fa fa-graduation-cap"></i> </h2></div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label> Surname *</label>
                <input id="studentFirstname" name="studentFirstname" type="text" placeholder="Enter Surname Name Here.." class="form-controlform-control-sm" required="required">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last name  *</label>
                <input id="studentLastname" name="studentLastname" type="text" placeholder="Enter Last Name Here.." class="form-control form-control-sm" required="required">
              </div>
              <div class="col-sm-6 form-group">
                <label> Student Secret Identification number</label>
                <input id="studentssn" name="studentssn" type="text" placeholder="Enter SSID.." class="form-controlform-control-sm" required="required">
              </div>
              <div class="col-sm-6 form-group">
                <label>Password *</label>
                <input id="student_password" name="student_password" type="password" placeholder="Enter password.." class="form-control form-control-sm" required="required">
               <!-- <input type="checkbox" onclick="myFunction()" >--><div><i class="fas fa-low-vision" onclick="myFunction()"></i></div> 
              </div>
              <div class="col-sm-6 form-group">
                <label for="sex">Sex  *</label>
                <select style="width: 80%" name="sex" class="form-control form-control-sm" required="required" >
                                     <option value="none">(please select sex*)</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-sm-6 form-group">
                <label class="control-label"> Schools attended[optional]</label>
                <input class="form-control form-control-sm" type="text" name="schoolAttended" placeholder="school Attended seperated by commas" />
              </div>
            </div>
            <hr>
            <!--<<<<<<<<<<<-----image upload >>>>>>>>>>>>>>>>>
<div class="container"><div class="col-md-6">
    <div class="form-group">
        <label>Upload Image</label>
        
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input name="inputImage" type="file" accept="image/png, image/jpeg, image/gif" id="imgInp">
                </span>
            </span>
            <input name="studentimageurl" id='urlname'type="text" class="form-control" readonly>
            
        </div>
        
       <button id="clear" class="btn btn-default">Clear</button>
        <img name="studentImage" id='img-upload'   />
    </div>
</div></div>
 -->
   
          <div class="row">
                
              <div class="col-sm-4 form-group">
                <label>State of Origin</label>
                   <select  name="state" id="state">
 
                    <?php
$_states=array ('Abia','Adamawa','Anambra','Akwa Ibom','Bauchi','Bayelsa','Benue','Borno','Cross River','Delta','Ebonyi','Enugu','Edo','Ekiti','Gombe','Imo','Jigawa','Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara','(FCT)') ;
for ($i=0; $i<38 ; $i++) { 
  echo '<option selected="selected" value="'.$_states[$i].'" >'.$_states[$i].'</option>' ;
}
  ?>
                  </select>
              </div>  
              <div class="col-sm-4 form-group">
                <label>Starting Class *</label><br />
                  <select name="startingclass">
                    <?php 
$_classes=array('nur1'=>'nusery1','nur2'=>'nusery2','nur3'=>'nusery3',
                  'pr1'=>'primary1','pr2'=>'primary2',
                  'pr3'=>'primary3','pr4'=>'primary4',
                  'pr5'=>'primary5','pr6'=>'primary6',
                  'jss1'=>'jss one','jss2'=>'jss two','jss3'=>'jss three',
                  'ss1'=>'ss one','ss2'=>'ss two','ss3'=>'ss three');

                  foreach ($_classes as $class_key => $class_value) {
                   # code...
                    echo '<option  selected="selected" value="'.$class_key.'">'.$class_key.' </option>';
                 } ?> </select>
             
              </div>  
              
                   <div class="form-group"> <!-- Date input -->
                    <label class="control-label" for="date">Date of Birth *</label><i class="fa fa-calender-alt"></i>
                    <input class="form-control form-control-sm" type="date" id="date" name="dateOfBirth" placeholder="yyyy/mm/dd"   style="width: 190px" required="required" />
                  </div>
            </div>
            
     
    <hr>
            <div class="row">
              <div><h2 style="color: green"> Parent/Gaurdain<i class="fa fa-home"></i></h2></div>
              <div class="col-sm-6 form-group"><br >
              

                <label>Title</label>
                <select id="title" class="form-control">
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr">Dr
                  </option>
                  <option value="Chief">Chief</option>
                </select>
              </div>    
              <div class="col-sm-6 form-group">
                <label>Full name *</label>
                <input id="parentname" name="parentname" type="text" placeholder="Enter parent Name Here.." class="form-control form-control-sm" style="width: 450px">
              </div>  
            </div>  
            <div class="form-group">
              <label>Address *</label>
              <textarea id="Address" name="Address" placeholder="Enter Address Here.." rows="3" class="form-control form-control-sm" required="required"></textarea>
            </div>  
            <div class="row">
          <div class="col-sm-6 form-group ">
            <label>Phone Number *</label>
            <i class="fa fa-phone">
            </i><input id="Phone" name="parent_mobile_number" type="text" placeholder="###Enter Phone Number Here.." class="form-control form-control-sm" required="required" style="width: 350px">
          </div>    
          <div class="ol-sm-6 form-group">
            <label>Email Address   ~</label><i class="fa fa-envelope"></i>
            <input name="Email" style="width: 350px" type="text" placeholder="Enter Email Address Here.." class="form-control">
          </div>  
          <div class="col-sm-6 form-group  ">
            <label>Occupation</label>
            <i class="fa fa-tasks">
            </i><input id="occupation" name="occupation" type="text" placeholder="occupation" class="form-control form-control-sm"  style="width: 190px">
            
          </div>
          <div class="col-sm-6 form-group">
          <label>Place of Occupation</label>
            <i class="fa fa-tasks">
            </i><input id="place-occupation" name="placeofoccupation" type="text" placeholder="office Address" class="form-control form-control-sm"  style="width: 189px">
          </div>
            </div>
            <div class="form-group has-error">
              <label class="control-label">Does your child have any form of deformity/ilness</label>
    
     <div class="radio">
      <label>
      <input type="radio" name="deformity" value="yes" >
      Yes
      </label>
    </div>
    <div class="radio">
      <label>
      <input type="radio"  name="deformity" value="No">
      No
      </label>

    </div><!--declaration!-->
            
              </div> 
              <div><h2 style="color: green"> Information <i class="fa fa-question"></i> </h2></div>
              <div class="form-group"> <!-- Message input !-->
    <label class="control-label " for="message_id">Any additional information that might help the school authority to guide your child that requires attention?</label>
    <textarea class="form-control" id="message_id" name="message" rows="5"></textarea>
  </div>
  <div class="row"><div><h2 style="color: green"> Declaration <i class="fa fa-check"></i> </h2></div>

                <div class="checkbox">
                    <label>
                    <input type="checkbox" id="healthCheck" name="healthCheck" value="yes" required="required">
                    I hereby declare  that the information given above is to the best of  my knowledge and correct.That i will abide by the school's rules and regulations.
                    </label>
                </div>
            </div>
<div style="text-align: center;">
          <button type="submit" style="width: 170px" name="enrol_student_button" id="firstenrol" class="btn btn-LG btn-info" data-toggle="modal" >ENROLL</button> 
           </div>   <!--data-toggle="modal" data-target="#exampleModalLong"-->     
          </div>
 <!--<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Congratulations !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You have sucessfully enrolled to this school kindly visit the school ,to get your unique student identification number.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button name="enrolstudent" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->
        </form> 
       
         <div class="text-center">
          <a class="d-block small mt-3" href="Index.php">Login Page</a>
           
        </div>
        </div>
  </div>
   
  </div>
   <script src="http://code.jquery.com/jquery.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

   
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript">

    function myFunction() {
    var x = document.getElementById("student_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    /**$('firstenrol').on('keydown',function(){

if($('studentFirstname').val()!='' && $('studentLastname').val()!=' ' && $('studentFirstname').val() !='' && $('healthCheck').val() != null  ){
  $('exampleModalLong').modal('show');
}
});*/




  </script>
</body>

</html>