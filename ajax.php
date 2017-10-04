<?php
include 'database.php';
 $st = $_GET['q'];
 $st = strtolower($st);
 
 $result = mysql_query("SELECT * FROM register ");
  while($row = mysql_fetch_array($result))
     {
		$s=$row['username'];
		$email=$row['email'];
		$id=$row['id'];
		 $s = strtolower($s);
		if(!empty($_GET['q'])) {
		if (strpos($s,$st) !== false) {
			if($s[0]==$st[0]){
       echo "<a href='home.php?id=$id'> " . $row['username'] . "</a><br><br>";
	   
  }}
		}
	
	 }
?>