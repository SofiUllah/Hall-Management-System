<?php


ob_start();

     session_start();

include "home.php";
include "function.php";

?>
<style>
 margin: auto; 
	color:#fff;
	
	border-top-left-radius: 20px;
    border-top-right-radius: 20px;
	
</style>
 <div class="container well" style="margin-top:-20px;margin-left:0px;background-color:lavender-blush">
<div class="row">
	<div class="span5" style="background-color:lavender;">
	<h4 style="margin-left:90px">Message From Provost</h4>

 

   <p style="margin-left:10px">
     
      <?php
    
	
	$sql = "SELECT * FROM  `message` ";
	$result = @mysql_query($sql);
		if(@mysql_num_rows($result) > 0){
			while($row = @mysql_fetch_assoc($result)){
	
				echo $row["statment"]."<br>"; 
			}
		}
		else{
			echo "No news....................";
		}
	
?>

		
		 <button type="button" class="btn btn-info  btn-round" data-toggle="modal" data-target="#myModal">Read More</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="font-family:Quirlycues" class="modal-title">Message From Provost</h2>
        </div>
        <div class="modal-body">
         
		   
      <?php
    
	
	$sql = "SELECT * FROM  `message` ";
	$result = @mysql_query($sql);
		if(@mysql_num_rows($result) > 0){
			while($row = @mysql_fetch_assoc($result)){
	
				echo $row["statment"]."<br>"; 
			}
		}
		else{
			echo "No news....................";
		}
	
?>  
   </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
	</div>
	<div class="span7">
		<div id="myCarousel" class="carousel slide" style="background-color:lavender;">
		
			<div class="carousel-inner">
				<div class="active item">
					<img src="images/flw.jpg">
					<div class="carousel-caption">
						<h4>Hall Gate</h4>
						<p>This is a beautiful Tree infront of the Hall Gate</p>
					</div>
				</div>
				<div class="item">
					<img src="images/F6.png">
					<div class="carousel-caption">
						<h4>Side View</h4>
						<p>Rare Photo of FH hall from IEM building.</p>
					</div>
				</div>
					<div class="item">
					<img src="images/F8.png">
					<div class="carousel-caption">
						<h4>Achievements</h4>
						<p> honours from VC for being First again in Indoor Cricket Tournamet</p>
					</div>
				</div>
			</div>

			
			<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
		</div>
	
</div> 
</div>
<div class="container" style="background-color=":lavenderblush">
<div class="row" style="background-color=":lavender">
<div class="span5 ">  <br>
 <?php
     if($_GET['error']=='yes'){
		 echo '<script>alert("Your username or password is incorrect")</script>';
	 }
	 if($_GET['error']=='username') {
		 
		 echo '<script>alert("Your username or password is incorrect")</script>';
	 }
   
   ?>
   <?php
    
			if ( ($_SESSION['checkbox']) ) 
		{
			if(!isset($_COOKIE['username']))
			{
				session_destroy();
			}
		}
	
   if(!isset($_SESSION['id']) && (!isset($_COOKIE['username'])) ){
	   
	   ?>
  <form action="login_process.php" method="post">
                  username <input type="text" name="username" placeholder="enter username " required/> <br /> 
                  password:<input type="password" name="password" placeholder="enter password" required/></br> 
		   <input type="checkbox" name="checkbox"><span style="font-size:15px;"> Keep me logged in</span> </br></br>
					<input type="reset" value="reset" class="btn btn-danger" />
	<input type="submit" class="btn btn-success" name="sub" value="login" />
	</form>
   <?php } ?>
   
   <?php 
   if(isset($_SESSION['id']) || ( isset($_COOKIE['username']))  )  {?>
    <p style="margin-left:6px"> hellow,<?php
	  $d= username_from_user_id($_SESSION['id']);
	  if($d){
		  
		  echo $_SESSION['username']."<br>";
		  
	  }
	  else{
		  echo $_COOKIE['username']."<br>";
	  }
	  ?>
	  </p>
	   <div class="row">
            <div class="span5">		  
		 <div class="btn-group-vertical" style="margin-left:00px">
		 <?php
	  if(is_admin($_SESSION['id'])){?>
		  
	      
	
	    
		  <a href="up.php" style="margin-bottom:2px"class="btn btn-info">homenotice</a>
		 <a href="UpdateStatus.php"style="margin-bottom:2px" class="btn btn-info"> Add Status</a>
		  <a href="PrevRemDues.php"style="margin-bottom:2px" class="btn btn-info"> Add Bill</a> 
	     <a href="DeleteMember.php" style="margin-bottom:2px"class="btn btn-info">DeleteMem</a>
		   <a href="Additoothers.php" style="margin-bottom:2px"class="btn btn-info">addimage</a>
		  <a href="Messageupdate.php" style="margin-bottom:2px"class="btn btn-info">ProvostMessage</a>
		  
		 
       <?php  }
	 
	     ?>
	 
	  
		  <a href="logout.php" style="margin-bottom:2px"class="btn btn-danger">logout</a>
		 <a href="Dues.php" style="margin-bottom:2px"class="btn btn-primary"> Dues</a>
		  <a href="MealOnOFF.php"style="margin-bottom:2px" class="btn btn-primary"> MealOnOff</a> 
	     
		  </div></div></div>
        
	
	 
	
   <?php } ?>
	</div>  
	
  <div class="span7" style="height:170px;margin-bottom:10px"><p style="margin-left:30px"><b><i>Recent News and Events</i></b></p>
   
  <marquee width="100%" height="170px" direction="up" bgcolor="#E6E6FA" onmouseover="this.stop();" onmouseout="this.start();"scrollamount="1" loop="-.5"overflow="scroll">
<p style="margin-left:10px">
  <?php
    
	$con=mysql_connect("localhost","root","");
	mysql_select_db("association",$con);
	
	$sql = "SELECT * FROM  `update`   ORDER BY `num` DESC";
	$result = @mysql_query($sql);
		if(@mysql_num_rows($result) > 0){
			while($row = @mysql_fetch_assoc($result)){
	
				echo "News ".$row["num"]."<br>" . $row["Status"]. "<br>" . "Date: " . $row["date"]. "<br>"; 
			}
		}
		
		else{
			echo "No news....................";
		}
		mysql_close();
?>
<!--
Annual Feast of this year will be held next upcomming 25th December.All boarders are
   requested to keep thier meal on this day.A large variety of items of Food manu will be arranged that details
   will be described later on Hall Notice Board.</p></br>
   <p> New 2k15 boarders are requested  to apply for vacancy seat.They have to take application form from hal office and fill it</p></br>
   <p>The boarders who want to be dinning Manager next month requested to apply </p>
   </p> THe monthly feast will be arranged next 6th December.All are requested to keep their meal ON</p>
     -->


   </marquee>


</div> 
</div>
</div>



<br><br><br>
 <?php

  include "foother.php";
  ?>
 
</div>