<?php
include "database.php";
  session_start();
  $username=$_SESSION['username'];
  $email=$_SESSION['email'];
  $password=$_SESSION['password'];


	
    llogin($username,$pass);

    function llogin($name,$pass){
	
	$sql="SELECT * FROM user WHERE username='$name'";
	$result=mysql_query($sql);
	if($result){
	while($row = mysql_fetch_array($result)){
		if($row['password']== $pass){
			
			
			header('Location:registration-form-validatio.php?error=password exists');
			die();
			
		}
		else {
			header('Location:Project.php);
			
		}
	}
	}
	else{
	header('Location:Project.php');
	
	}
}

   insert_user($username,$email,$password);

   function insert_user($name,$email,$pass){
	
	$sql="INSERT INTO user(username,email,password)VALUE('$name','$email','$pass')";
	mysql_query($sql);
}


?>