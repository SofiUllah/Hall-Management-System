<?php
mysql_connect("localhost","root","");

mysql_seclect_db("association") or die(mysql_error());
 $paritialStates = $_POST['partialState'];
 $states= mysql_query("SELECT * FROM register WHERE username LIKE '%$paritialStates%'";
 while($state = mysql_fetch_array($states)) {
	 
	echo $state['username'] ;
	
	
 }
 
 ?>