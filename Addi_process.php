<?php
ob_start();
     session_start();
include "home.php";
include "function.php";

	include "database.php";
	$name = $_POST['ii'];
	
   $image_link = "";
	
	$status=$_POST['title']; 
	if($_FILES['image_file']['error']>0) {
		echo 'error';
	}
	else
	{ 
  
$prefix = $_SESSION['user_id'].time();
$link = "upload/".$prefix. $_FILES["image_file"]["status"];
		move_uploaded_file($_FILES["image_file"]["tmp_name"],$link);
		$image_link = "http://localhost/lg/upload/".$prefix. $_FILES["image_file"]["status"];
	}
	
   $sql = "INSERT INTO image (image_link,title) VALUES('$image_link','$status')";

if (@mysql_query($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . @mysql_error();
}

   mysql_close();



include "foother.php";
die();
	
	
?>