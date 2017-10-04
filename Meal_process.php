<?php
ob_start();
  session_start();
 $conn=mysql_connect("localhost","root","");
	mysql_select_db("association",$conn);
	include "home.php";
	if(isset($_POST['submit']))
  {
	$id=$_SESSION['id'];
	$from=$_POST['From'];
	$to=$_POST['To'];
	

	       $timestamp1 = strtotime($from);
           $fromd = date("d", $timestamp1); 
	       $fromm = date("m", $timestamp1);
		   $fromy = date("Y", $timestamp1);
   
	                 
						$timestamp2 = strtotime($to);
                      $tod= date("d", $timestamp2); 
	                 $tom= date("m", $timestamp2); 
	               $toy= date("Y", $timestamp2);
	
       
	 
	       $curday = date('d'); 
	       $curmonth = date('m'); 
	       $curyear = date('Y');
	     
	  
	    
	   
	   
	   if($fromd<$curday || $tod<$curd)
	   {
		   header("Location:MealOnOFF.php?error=i");
		   die();
	   }
	   
	      
	   
	   if($fromy != $toy || $curyear != $toy || $curyear != $fromy )
	   {
		    header("Location:MealOnOFF.php?error=i");
		   die();
	   }
	   
	   if( $fromm == $tom )
	   {
		   if($fromd > $tod)
		   {
			  header("Location:MealOnOFF.php?error=i");
			    die();
		   }
	   }
	   else
	   {
		   if($fromm>$tom)
		   {
			  header("Location:MealOnOFF.php?error=i");
			   die();
		   }
	   }
	   
	  if(($tom-1)==$fromm || $tom== $fromm) {
	 
			 
	 $sql1="SELECT username FROM register WHERE id='$id'";
      $res=mysql_query($sql1);
	   while($row = mysql_fetch_array($res)){
		 $username = $row['username'];
		 
	 }	
	 
	 $sql2="SELECT * FROM off WHERE username='$username'";
      $res2=mysql_query($sql2);
	   while($row2 = mysql_fetch_array($res2)){
		 if($row2['to']>$fromd)
		 {
			 header('Location:MealOnOFF.php?error=i');
			 die();
		 }
	 }
	 
	 
	
	$dif = $tod - $fromd;
	if($dif>45)
	{
		 header('Location:MealOnOFF.php?error=i');
		 die();
	}
	if($dif<0)
	{
		$dif = 30- $from;
	}
	
	  
	
    $sql = "INSERT INTO `off` (`username`, `from`, `to`) VALUES ('$username', '$fromd', '$tod')";
       
	   $res = @mysql_query($sql);
       echo 'You successfully off your Meal From '.$from." to ".$to;
	   
  }
  else
  {
	   header("Location:MealOnOFF.php?error=i");
	   die();
  }
  }
  ?><div class="container well"style="margin-left:-3px">
   <?php
    include "foother.php";
	
?>
</div>