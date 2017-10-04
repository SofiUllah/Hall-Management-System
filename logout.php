<?php
session_start();

session_destroy();
setcookie("username",$username,time()-10);
setcookie("password",$password,time()-10);
setcookie("id",$id,time()-10);
header('Location:Project.php');
?>

