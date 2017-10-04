<?php

       echo date('d')."<br>";
       echo date('Y')."<br>";
       echo date('m')."<br>";
	  
	   die();
	 
	 
	      $timestamp1 = strtotime(date());
         $fromd = date("d", $timestamp1);  
		  $fromm = date("m", $timestamp1); 
		   $fromy = date("Y", $timestamp1); 
		   echo $fromd."        ";
	      echo $fromm;     echo $fromy;
  

?>