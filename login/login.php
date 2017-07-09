<?php
$link = mysqli_connect("localhost","root","","ledkerala");

session_start();
include_once 'dbconnect.php';



if(isset($_POST['btn-login']))
{
	$uname = mysqli_real_escape_string($link,$_POST['uname']);
	$upass = mysqli_real_escape_string($link,$_POST['pass']);
	$res=mysqli_query($link,"SELECT * FROM users WHERE username='$uname'");
	$row=mysqli_fetch_array($res);
	
	   if($row['usertype']=="1")
	    { if($row['userpass']==md5($upass))
		{
			
		$_SESSION['user'] = $row['user_id'];
		header("Location: ../admin/admin_index.php");
	    }
		
		
	else
	  {
		?>
        <script>alert('INCORRECT PASSWORD!!!');</script>
        <?php
	  }
		}
		if($row['username']==($uname))
		{}
		else
	  {
		?>
        <script>alert('No Such User allowed to login!!!');</script>
        <?php
	  }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Portal</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<p>&nbsp;</p><br/>
<p><div class="login">LED KERALA</div>
       <p>&nbsp;    </p>
       <p><a href="../index.html"></a></p>
    <a href="../index.html">Home</a>
    </p>
<div id="login-form">
  <form method="post">
    
    <table align="center" width="30%" border="0">
      <tr>
        <td><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER AUTHENTICATION</h3></td>
      </tr>
      
      <tr>
        <td><input type="text" name="uname" placeholder="User Name" required /></td>
      </tr>
      <tr>
        <td ><input type="password" name="pass" placeholder="Your Password" required /></td>
      </tr>
      <tr>
        <td><button type="submit" name="btn-login">Sign In</button></td>
      </tr>
     
    </table>
    </h3>
          
          </td>
      </tr>
    </table>
  </form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="footer">

     <div id="footer">
    
        
       
       <p>&nbsp;</p>
       Copyright©&Design: <a href="http://www.nss.vidyaacademy.ac.in/"> NSS Vidya Academy</a>| <a href="../credits.html">Credits</a><a href=""></a></p>
       <p>&nbsp;</p>
    </div> 

</div>
</center>
</body>
</html>
