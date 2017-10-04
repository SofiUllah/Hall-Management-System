<?php


ob_start();
     session_start();
include "home.php";
include "function.php";
?>
 
  <div class="container"  style="margin-top:-20px">
  <div class="row">
  <div class="span2 well" style="margin-left:100px">
   <div class="btn-group-vertical">
   <a href="admission.php" style="margin-bottom:2px"class="btn btn-primary">admission</a>
     <a href="provost.php" style="margin-bottom:2px"class="btn btn-primary">provost</a>
	<a href="Manager&Staff.php" style="margin-bottom:2px"class="btn btn-primary">Manager&Staff</a>
	 
	   <a href="Boarders.php" style="margin-bottom:2px"class="btn btn-primary">Boarders</a>
	  </div>
	  </div>
  <div class="span8 well" style="margin-right:0px">
    <div class="fn" style="margin-left:80px;">
         <h3 style="margin-left:160px;font-family:Eutemia;font-size:28px"> <b><i>Recently added images </i></b><h3>
            <?php
			  	$sql="SELECT * FROM image ";
				$count=0;
	          $result=mysql_query($sql);
			 
	       while($row = mysql_fetch_array($result)){
			   
			   ?><img  style="width:200px; height:160px" src="<?php echo $row['image_link'] ?>" alt="go" />
			 
			 
		   <?php 
		   
		           $count++;  
                   if($count%3==0)
				   {
					   ?> <p style="margin-bottom:4px"></p> <?php
				   }					   
		   
		   } ?>
		   </div>
			 
	   </div>
	   
	   
   
   
	  </div>
	  </div>
	  </div>
	  
 <div class="container well"  style="margin-top:-000px">	 
  <?php
  include "foother.php";
  ?>
  </div>
  
  
  
  
  
  
  
  
  
  
  