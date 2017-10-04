<?php


ob_start();
     session_start();
include "home.php";
include "function.php";
?>

<?php

     if($_GET['error']=='yes'){
		 echo '<script>alert("Your username or password is incorrect")</script>';
	 }
	 if($_GET['error']=='username') {
		 
		 echo '<script>alert("Your username or password is incorrect")</script>';
	 }
	 ?>
	 <div class="container well" style="margin-top:-20px;">
	 <div class="row">
	 <div class="span4"></div>
	 
	 <div class="span4 well">
	<form action="login_process.php" method="post">
	<legend><h3 style="margin-left:130px;font-size:20px;">Login</h3></legend>
                    <h4 style="font-family:Quirlycues" class="modal-title">username</h4> <input type="text" name="username" placeholder="enter username " required/> <br /> 
                     <h4 style="font-family:Quirlycues" class="modal-title">Password</h4><input type="password" name="password" placeholder="enter password" required/></br> 
				    <input type="checkbox" name="checkbox"><span style="font-size:15px;"> Keep me logged in</span></br><br>
					<input type="reset" value="reset" class="btn btn-danger" />
	<input type="submit" class="btn btn-primary" name="sub" value="login" />
	</form>
       </div>
	    <div class="span3"></div>
		</div>
		</div>
	 <div class="container well" style="margin-top:-20px">
	 <?php
    include "foother.php";
   ?>
   </div>

