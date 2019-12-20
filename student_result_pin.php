  <?php
    session_start();
 // if (session_status() !== PHP_SESSION_ACTIVE) {
    //            session_start();
          // }  else{ session_start();}
             
?>
  

 <!DOCTYPE html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Result-Checker Holy Family Catholic Schools Takum</title>
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
                echo " ".$_SESSION['user_full_name'];} ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
             
              <!-- Menu Body -->
           
               
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 
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
      Result Checker <br><br>
        <small><em>Enter the Student ID/SSN number and Result Checking Pincode</em></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Result Checker</a></li>
        <li class="active">Academic Result</li>
      </ol>
    </section>
 
      
    <!--------------------------------- Main content ---------------------------------- -->
      <section class="content">
      	<form action="Student_view_result.php" method="POST">
      		 <div class="row">
    <!--form group--><div class="input-group">
		                <div class="col-lg-6">
		              <!-- <label for="student_ssn">Student SSN</label>-->
		      			 <input  name="studentssn" type="text" class="form-control" placeholder="Student SSN">
		      			</div>
		      			<div class="col-lg-6">
			                  <div class="input-group">
			                   
			                  	 <input type="text" name="Result_pincode" class="form-control" placeholder="Result Pin">
			                    <span class="input-group-btn">
			                      <button type="submit" class="btn btn-info btn-flat">Go!</button>
			                    </span>
			              </div>
			         </div>
  </div><!-- form group-->
  </div>
</form></section></div>
 <!--------------------------------- Main content ---------------------------------- -->
<footer class="main-footer">  <h3>User Support</h3>Call: <small>08061272442</small><br><strong>Copyright &copy; 2018 <a href="#">Holy family Schools,Takum-Taraba state</a>.</strong> All rights reserved.
  </footer>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

 <!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
</body>
</html>
