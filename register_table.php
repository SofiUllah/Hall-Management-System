<?php
	
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$conpassword=$_POST['conpass'];
	$date=$_POST['date'];
	$email=$_POST['mail'];
	$phone=$_POST['phone'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("association",$con);
	if($password != $conpassword)
	{
		header('Location:register.php?error=match');
			die();
	}
	
		$sql1="SELECT * FROM register WHERE username = '$username' OR email = '$email' ";
	$result=mysql_query($sql1);
	if($result){
	while($row = mysql_fetch_array($result)){
		
			
			
			header('Location:register.php?error=s');
			die();
			
		
	}
	}
	$sql="INSERT INTO register (username,password,date_of_birth,email,telephone)VALUES('$username','$password','$date','$email','$phone')";
		mysql_query($sql,$con);
	
	header("location:Project.php?error='YouRegisteredsuccessfully' ");
	
	
?>