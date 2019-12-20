 
<?php 

session_start();
             
require_once('Connect.php');
 	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$studentssn= $_POST['studentssn'];
$Result_pincode= $_POST['Result_pincode'];

$pin_sql="SELECT Result_pins FROM result_pins WHERE Result_pins='$Result_pincode'";//check if pin is on db
$pin_sql_conn=mysqli_query($conn,$pin_sql);//
if ($pin_sql_conn) {
	# code...not inserted in pin counter table yet
$studentssn_found=$_POST['studentssn'];
//snippet to provied selected result for results
    $sql="SELECT * from results where ssn='$studentssn_found'";  
    $_results=mysqli_query($conn,$sql);
    if($_results){
$array_results=mysqli_fetch_row($_results);
}else{$no_result_found="no results found,try again";}

}
//true if pin is found
 /**$container_array[]=$array_results;
	print"<pre>";
	print_r($array_results[3] ); 
	print "<br>";
	print_r($array_results[4] ); 
	print "<br>";
	print_r($array_results[5] ); 
	print"<pre>"; 
	
	 $container_array[]=$array_results;
	 foreach ($container_array as $key => $value) {
	 	# code...
	 	print_r($value);
	 }

	*/ 
 


?>
 

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
        <li class="header">Student Dashboard</li>
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
  <div class="content-wrapper"  >
    <!-- Content Header (Page header) -->

    <section class="content-header">
    	
      <h1>
      Result Checker
        <small>Enter the Student ID/SSN number and Result Pin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Result Checker</a></li>
        <li class="active"></li>
      </ol>
    </section>
 
      
    <!-- Main content -->
      <section class="content" id="div_student_result"  name="div_student_result">
      
   
     
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"><center><small><strong>Holy Family Catholic Secondary Schools,Takum-Academic Result</strong></small></center><br>
              <h3 class="box-title"><?php echo "<h3>Result for :" ." ".$array_results[4]." " .$array_results[1]  ."</h3>" ;?></h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <table id="Result_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Subjects</th>
                  <th>First C/A</th>
                  <th>Second C/A</th>
                  <th>Exam</th>
                  <th>Total mark</th>
                  <th>Class</th>
                  <th>Academic year</th>
                  <th>Term</th>
                  <th>Subject position</th>
                  <th>Grade</th>
                  <th>Subject Average</th>

                </tr>
                </thead>
                <tbody>
                <tr>

<td><?php echo $array_results[5] ; ?></td><!--1 -->
<td><?php echo $array_results[6] ; ?></td><!--2 -->
<td><?php echo $array_results[7] ; ?></td><!--3 -->

<td><?php echo $array_results[8] ; ?></td><!-- 4-->
<td><?php echo $array_results[9] ; ?></td><!-- 5-->
<td><?php echo $array_results[10] ; ?></td><!--6 -->
<td><?php echo $array_results[11] ; ?></td><!--7 -->
<td><?php echo $array_results[12] ; ?></td><!--8 -->
<td><?php echo $array_results[13] ; ?></td><!--9 -->
<td><?php echo $array_results[15] ; ?></td><!--10 -->
<td><?php echo $array_results[16] ; ?></td><!--11 -->
 


                </tr>
                 
            
                </tbody>
                <tfoot>
                <tr>
                        <th>Subjects</th>
                  <th>First C/A</th>
                  <th>Second C/A</th>
                  <th>Exam</th>
                  <th>Total marks</th>
                  <th>Class</th>
                  <th>Academic year</th>
                  <th>Term</th>
                  <th>Subject position</th>
                  <th>Grade</th>
                  <th>Subject Average</th>
                </tr>
                </tfoot>
                </tfoot>
              </table>
            </div>
           
            
         
  <div class="card border-success mb-3" style="max-width: 68rem;">
  <div class="card-header"><strong> General Information </strong>  </div>
  <div class="card-body text-success">
     
    <p class="card-text">Total Marks In All Subjects      :<?php echo "    ". $array_results[21]; ?><br>
            Class Average n All Subjects      :<?php echo "    ".$array_results[20]; ?><br>
            Class position    :<?php echo "    ".$array_results[22]; ?> <br>
            Comment      :<?php echo "    ". $array_results[17]; ?><br>
            Form master's Name     :<?php echo "    ". $array_results[19]; ?><br>
            Next Term Begins On     :<?php echo "    ". $array_results[23]; ?>
            <br><br>
             </p>
    
  </div>

</div>
            
      <!--------------------------
        | Your Page Content Here |




        -------------------------->
         
        <!-- /.col -->
        
 
        <!-- /.col -->
      
      
 

     </div>
 </div>
</div>
</section><!--section ends-->
 
   <div><button type="button" class="btn btn-info"  onclick="printDiv('div_student_result')">Print result</button></div> 
</div>
<!-- ./wrapper -->
<footer class="main-footer">
    <!-- To the right -->
       <h3>User Support</h3>Call: <small>08061272442</small><br>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Holy family Schools,Takum-Taraba state</a>.</strong> All rights reserved.
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
<script>




  function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
  $(function () {
    $('#Result_table').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

