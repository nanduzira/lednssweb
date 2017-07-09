<?php
$link = mysqli_connect("localhost","root","","ledkerala");
if(!mysqli_connect("localhost","root",""))
{
	die('oops connection problem ! --> '.mysqli_error());
}
if(!mysqli_select_db($link,"ledkerala"))
{
	die('oops database selection problem ! --> '.mysqli_error());
}

?>
