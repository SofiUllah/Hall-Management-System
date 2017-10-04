<?php
session_start();
if($_SESSION['id']) header('Location:Halim/Project.php');
else{
	header('Location:register.php');
} 

?>