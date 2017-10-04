<?php
    session_start();
	include "home.php";
 	$username=$_POST['username'];
	$password=$_POST['password'];
	echo $_SESSION['username'];
     
	include "database.php";
	
	
		$sql="SELECT * FROM `register` WHERE username = '$username'";
		
	  $result = mysql_query($sql);
	  
	if($result)
	{
	      while($row = @mysql_fetch_array($result))
		  {
	
	
	              $sql1 = "UPDATE `register` SET  password = '$password'  WHERE username = '$username' ";

                 if (@mysql_query($sql1)) {
                    echo "Record updated successfully<br><br>";
					
                 }  
                else
		         {
                        echo "Error updating record: " . @mysql_error();
                 }
	   }
	   echo 'go';
	}
	?>
	<div class="container well" style="margin-left:-2px"><?php
	  include "foother.php";
	  ?>
	  </div>
    

?>

	