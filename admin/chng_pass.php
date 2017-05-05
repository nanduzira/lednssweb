
<?php
session_start(); 
include_once '../login/dbconnect.php';
if(!isset($_SESSION['user']))
{
header("Location: ../login/login.php");
}
$res=mysqli_query($link,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);



?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Change Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="style.css" type="text/css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
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
          <li><a href="#"><i class="fa fa-link"></i> <span>Search</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="s_house.php">House</a></li>
            <li><a href="s_ward.php">Ward</a></li>
          </ul>
        </li>
         <li class="active"><a href="chng_pass.php"><i class="fa fa-link"></i> <span>Change Password</span></a></li>
        <li><a href="../login/logout.php?logout"><i class="fa fa-link"></i> <span>Sign Out</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>&nbsp;</h1><form method="post">
<center>
<table align="center" width="30%" border="0">
<tr>
<td><h2><center>
      Change Password</h2></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Enter Current Password" required /></td>
</tr>
<tr>
<td><input type="password" name="pass1" placeholder="Enter New Password" required /></td>
</tr>
<tr>
<td><input type="password" name="pass2" placeholder="Re-Enter New Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Change Password</button>
</td>
</tr>
<tr>
<td></td>
</tr>
</table>
</form><br/></p></center></center>

     
    </section>


    <section class="content"></section>

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
<?php

include_once '../login/dbconnect.php';
if(!isset($_SESSION['user']))
{
header("Location: ../login/login.php");
}
$res=mysqli_query($link,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);


if(isset($_POST['btn-signup']))
{
	$cpass=mysqli_query($link,"SELECT userpass FROM users");
	$c_pass=mysqli_fetch_array($cpass);
	$tpass = md5(mysqli_real_escape_string($link,$_POST['pass']));
	$curr_user=$_SESSION['user'];
	
	if($c_pass['userpass']==$tpass)
	{
	if($_POST['pass1']==$_POST['pass2'])
	{
			
	$upass = md5(mysqli_real_escape_string($link,$_POST['pass2']));
	
	if(mysqli_query($link,"UPDATE users SET userpass='$upass' WHERE '$curr_user'=user_id"))
	{
		?>
        <script>alert('successfully Changed ');</script>
        
        <?php
	}
	else
	{
		?>
        <script>alert('error while changing password ...');</script>
        <?php
	}
	}
	else
	 {
		 ?>
        <script>alert('Passwords do not match');</script>
        <?php
	 }
	}
	else
	{
		 ?>
        <script>alert('Current Password is INCORRECT!!!');</script>
        <?php
	}
}
?>