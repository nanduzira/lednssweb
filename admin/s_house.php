<?php
session_start();
include_once '../login/dbconnect.php';
if(!isset($_SESSION['user']))
{
header("Location: ../login/login.php");
}
$res=mysqli_query($link,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);



?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Search | House</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin Panel</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
         
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                     
                      <!-- The message -->
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            
            
        
             
       
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              
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
          <p>Administrator</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USEFUL LINKS</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="admin_index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Search</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="s_house.php">House</a></li>
            <li><a href="s_ward.php">Ward</a></li>
          </ul>
        </li>
         <li><a href="chng_pass.php"><i class="fa fa-link"></i> <span>Change Password</span></a></li>
        <li><a href="../login/logout.php?logout"><i class="fa fa-link"></i> <span>Sign Out</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><center>
      <form method="post">

<table align="center" width="30%" border="0">
<tr>
<td><section class="content-header">
      <h1>
       Search Houses
        <small></small>
      </h1></td>
</tr>
<tr>
<td><input type="text" name="ward" placeholder="Enter Ward Number" required /></td>
</tr>
<tr>
<td><input type="text" name="hno" placeholder="Enter House Number" required /></td>

</tr>
<tr>
<td><button type="submit" name="search">Search</button>
</td>
</tr>
<tr>
<td></td>
</tr>
</table>
</form><br/>
<?php
	  include_once '../login/dbconnect.php';
	  if(isset($_POST['search']))
      {
      $ward=mysqli_real_escape_string($link,$_POST["ward"]);
      $hno=mysqli_real_escape_string($link,$_POST["hno"]);

      $result1=mysqli_query($link,"select * from house where ward_no='$ward' and house_no='$hno'");
	  $result2=mysqli_query($link,"select * from member where ward_no='$ward' and house_no='$hno'");
      while($row1=mysqli_fetch_array($result1))
      {
      echo "<table align='center' width='70%' border='1'> 
	   <tr><td colspan='2'>Reg. ID</td><td colspan='2'>".$row1['house_id']."</td></tr>
       <tr><td colspan='2'>Ward</td><td colspan='2'>".$row1['ward_no']."</td></tr>
        <tr><td colspan=2>House No</td><td colspan='2'>".$row1['house_no']."</td></tr>
      <tr><td colspan=2>Address</td><td colspan=2>".$row1['address']."</td></tr>
      <tr><td colspan=2>Ration Card No</td><td colspan=2>".$row1['rat_no']."</td></tr>
      <tr><td colspan=2>Category</td><td colspan=2>".$row1['category']."</td></tr>
      <tr><td colspan=2>Own Land</td><td colspan=2>".$row1['land']."</td></tr>
      <tr><td colspan=2>Annual Income</td><td colspan=2>".$row1['annual_income']."</td></tr>
      <tr><td colspan=2>Electricity Consumer No</td><td colspan=2>".$row1['elec_cons_no']."</td></tr>
      <tr><td colspan=2>Landline</td><td colspan=2>".$row1['landline']."</td></tr>
      <tr><td colspan=2>Gas Connection</td><td colspan=2>".$row1['gas']."</td></tr>
      <tr><td colspan=2>Drinking Water</td><td colspan=2>".$row1['drinking_wtr']."</td></tr>
      <tr><td colspan=2>Latrine</td><td colspan=2>".$row1['latrine']."</td></tr>
      <tr><td colspan=2>Vehicle</td><td colspan=2>".$row1['vehicle']."</td></tr>
      <tr><td colspan=2>Computer literacy</td><td colspan=2>".$row1['cmptr_lit_count']."</td></tr>";
	  }
	        $result1=mysqli_query($link,"select * from house where ward_no='$ward' and house_no='$hno'");

	   if($row1=mysqli_fetch_array($result1))
      {
	   echo "<tr><td><strong>Member Name</strong>
      <td><strong>Age</strong></td><td><strong>Sex</strong></td><td><strong>Aadhar No</strong></td></tr>";
	  }
	  while($row2=mysqli_fetch_array($result2))
      {
      $id=$row2['member_id'];
      echo" <tr><td><a href='opn_member.php?id=$id'>".$row2['name']."</a><td>".$row2['age']."</td><td>".$row2['sex']."</td><td>".$row2['adhaar']."</td></tr>"
    ;
	  }echo "</table>" ;}
 ?></p></center>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
      
      </p>
      <p>&nbsp;</p>
     <br/>
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; & Design : NSS Vidya Academy of Science and Technology </strong> 
  </footer>

 
        <!-- /.control-sidebar-menu -->

        
        <!-- /.control-sidebar-menu -->

     
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
