<?php

require 'database.php';

   include "home.php";
	$date=$_POST['date'];
	$status=$_POST['status'];
	
$sql = "UPDATE headmar SET mes='$status' WHERE poss = 1";

if (@mysql_query($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . @mysql_error();
}

mysql_close();

?>