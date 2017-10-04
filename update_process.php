<?php
	ob_start();
	include "database.php";

	$date=$_POST['date'];
	$status=$_POST['status'];
	
  $sql = "INSERT INTO `update` (Status , date) VALUES ('$status' , '$date')";

   if (@mysql_query($sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" ;
}
die();
	
	
?>