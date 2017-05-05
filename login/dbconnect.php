<?php
$link = mysqli_connect("localhost","root","","led");
if(!mysqli_connect("localhost","root",""))
{
	die('oops connection problem ! --> '.mysqli_error());
}
if(!mysqli_select_db($link,"led"))
{
	die('oops database selection problem ! --> '.mysqli_error());
}

?>
