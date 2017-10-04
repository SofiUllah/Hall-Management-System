<?php
session_start();
if($_SESSION['id'])
{
	$k=$_SESSION['username'];
		header('Location:Project.php');
	
}
else{
	header('Location:login.php');
} 

?>