<?php
include "database.php";
session_start();
if(isset($_POST['sub'])){
$username=$_POST['username'];
$pass=$_POST['password'];

	$sql="SELECT * FROM register WHERE username='$username' and password='$pass'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		
			$_SESSION['id'] = $row['id'];
			
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['email'] = $row['email'];		
			
			$ses = $_SESSION['username'];
			$pass= $_SESSION['password'];
			
			    $_SESSION['checkbox']  =  $_POST['checkbox'];
			
			if (isset($_POST['checkbox'])) 
            {                
                 setcookie( "username",$ses, time()+30);
                 setcookie( "password",$pass, time()+30);
				 
            }  
			
			header('Location:Project.php');
			die();
			
		}
		
			header('Location:login.php?error=yes');  
		die();
	
	
	header('Location:login.php?error=yesss'); 
}




?>