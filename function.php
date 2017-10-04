<?php
session_start(); 
 include "database.php";
 
 function username_from_user_id($id) {
	 $sql = "SELECT username FROM register WHERE id='$id'";
	 $res = mysql_query($sql);
	 while($row = mysql_fetch_array($res)) {
		 
		 return $row['username'];
	 }
 }
 function is_admin($id) {
	 
	 if(username_from_user_id($id)== 'admin') return true;
	 else return false;
 }

 ?>