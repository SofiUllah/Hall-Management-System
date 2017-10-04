<?php
ob_start();
     session_start();
include "home.php";
include "function.php";

	include "database.php";
  
	$date=$_POST['date'];
	$status=$_POST['status'];
	
   $sql = "UPDATE `message`	 SET statment='$status' WHERE pos=1";

if (@mysql_query($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . @mysql_error();
}

   mysql_close();



include "foother.php";
die();
	
	
?>