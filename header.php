<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Holy Family Catholic Schools Takum</title>
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




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
 
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
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
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
             
             
          </li>
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
                echo " ".$_SESSION['user_full_name'];} ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
             
              <!-- Menu Body -->
           
               
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 <!--  <a href="#" class="btn btn-default btn-flat">Profile</a>-->
                <!--</div>
                 <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign In</a>
                </div>-->

                <!--<div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>-->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
        <li class="header"><?php echo $_SESSION['class'] ." ";?>Dashboard</li>
        <!-- Optionally, you can add icons to the links -->

 <?php
            if (isset($_SESSION['class']) && $_SESSION['class'] == 'Student') {
                

      //  <!------------STUDENT-->
        echo" <li class='a treeview'><a href='#'><i class='fa fa-users'></i><span>Student</span></a>
              <ul class='treeview-menu'>
                <!--STUDENT 1.VIEW RESULT BY SSN,DROP A QUESTION OR COMPLAIN-->
                         <li><a href='#'><i class='fa fa-calendar'></i>    My profile</a>
                  <li><a href='student_result_pin.php'><i class='fa  fa-external-link'></i><span>Check Result</span></a> </li>

                   <li><a href='#'><i class='fa fa-calendar'></i><span>Academic calender</span></a>
                  </li>
                  <li><a href='#'><i class='fa fa-code-fork'></i><span>   Announcements</span></li></a>
                           <li><a href='#'><i class='fa fa-calendar'></i>    <span>Leave A question to a teacher</span></a>
              </ul>

        </li>
        <li class='active'><a href='#'><i class='fa fa-folder-open'></i> <span>Library Resources</span></a></li>";

}elseif (isset($_SESSION['class']) && $_SESSION['class'] == 'Teacher') {

      //  <!------------TEACHER-->
        echo "<li class='a treeview'><a href='#'><i class='fa fa-user'></i> <span>Teacher</span><span class='pull-right-container'>
                <i class='fa fa-angle-left pull-right'></i>
              </span></a>
              <ul class='treeview-menu'>
                <!--Teacher can 1.register,2.Enter student result ssn,3.edit profile,4.drop a remark after updating a result after login -->
              <li><a href='Student_Result_Entry.php'><i class='fa  fa-external-link'></i>Result Entry</a> </li>
              <li><a href='Student_formster_Result_Entry.php'><i class='fa  fa-external-link'></i>Form Master Remarks</a> </li>

            </ul>

        </li>";
 }elseif (isset($_SESSION['class']) && $_SESSION['class'] == 'Parent') {



        //<!------------PARENT-->
              echo "  <li class='a treeview'><a href='#' ><i class='fa  fa-venus-double'></i> <span>Parent</span></a>

<ul class='treeview-menu'>
  <!--parent can 1.register,2.view child result,3.enrol a new child,4.Drop a comment after login -->
              
              <li><a href='Register_Student.php'><i class='fa  fa-external-link'></i><span> Enrol a Child</span></a></li>
              <li><a href='student_result_pin.php'><i class='fa  fa-external-link'></i><span>View Child Result</span></a> </li>
              <li><a href='#'><i class='fa  fa-external-link'></i> <span>Leave A Comment/Report<span></a></li>
            </ul>


                </li>";
 }?>

                <!-------- other items on dashboard ---->
        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Academics</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Timetable.html"><i class="fa fa-calendar"></i> <span>Timetable</span></li></a>
             </li>
          </ul>
        </li>

         
        <li><a href="#"><i class="fa fa-share-square"></i> <span>information items</span></a></li>
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
        HFCS-TK
        <small>the key to success is education....</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php" onclick="<?php session_destroy();?>"> LOGOUT ?</a></li>
        <li class="active">Your Account</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |




        -------------------------->
         <div class="row">
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Over 800</h3>

              <p>Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <!-- /.col -->
        
<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Information Items</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
         </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Libraries & <br>Resources</span>
              <span class="info-box-number">13,648</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div><div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Events</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

      
  </div>
<!-- /.row -->

<!--- =============================== Carousel -->
  

</div>
         
          <!-- /.info-box-->
        
    </section> 

     <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Home
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Holy family Schools,Takum-Taraba state</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
       
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>

