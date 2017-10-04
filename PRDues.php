<?php
session_start();
  ob_start();
    include "database.php";

 
 	$username=$_POST['username'];
	 $_SESSION['BILL'] = $username;
	$PDues=$_POST['PrevDue'];
	$TDues = $_POST['TotalDue'];
	
 
    $sql = "UPDATE `off` SET `prevdue` = '$PDues' , `totaldue` = '$TDues' ,`month` = 'February'  WHERE `username` = '$username' ";

  

  if (@mysql_query($sql)) {
	   if(@mysql_num_rows($sql)<1){?><h3><?php
    echo "You updated Bill information of ".$username." successfully ";?></h3><?php
 } else {
    echo "Error: " . $sql . "<br>" . mysql_error();
}
   }
 
 
?>