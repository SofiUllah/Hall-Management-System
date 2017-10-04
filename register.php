<?php

ob_start();
include "home.php";
include "function.php";

?>
	<div class="container" style="margin-left:-0px">


	
	<body class="lead">
			<div class="container well" style="margin-top:-20px;font-family:Eutemia;font-size:18px" >
			<div class="row">
			<div class="span3"></div>
			<div class="span6 well">
				<div class="content">
				
					<form action="register_table.php" method="post">
						<div align="center">
							<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							<?php
							 if($_GET['error']=='match'){
		         echo "<script>alert('Password doesnot match')</script>";
	       }
	          if($_GET['error']=='s') {
		 
		      echo "<script>alert('username or password already exists')</script>";
	           }
	 ?>
							
					<legend><h2 style="font-family:Eutemia;">Sign Up</h2></legend>
								</br>
							
									<label for='username' ><p font-family:Eutemia;font-size:22px>UserName*
									<input type='text' name='username' maxlength="50" style="margin-left:30px;height:40px"required/></label>
							
								 
								
			
								<h3>
									<label for='password' >Password *:
									<input type='password' name='pass'  maxlength="50" style="margin-left:29px;height:40px"required/></label>
								</h3>
								  	<h3>
									<label for='password' >confirm Password *:
									<input type='password' name='conpass'  maxlength="50" style="margin-left:29px;height:40px"required/></label>
								</h3>  
								
								<h3 style="margin-left:50px">
									<label for='date' style="">Date of Birth *: 
									<input type='date' name='date'  maxlength="50" style="margin-left:0px;height:40px;width:270px"required/></label>
								</h3>
								    
								 
								<h3>
									<label for='email' >Email *: 
									<input type='email' name='mail' maxlength="50" style="margin-left:75px;height:40px"required/></label>
								</h3>
								    
								 
								<h3>
									<label for='telephone' >Telephone: 
									<input type='text' name='phone'  maxlength="50" style="margin-left:45px;height:40px"required/></label>
								</h3> </p>
								    </br>
								
								<input type="reset" value="reset" class="btn btn-danger" />
								<input type="submit" value="Submit" class="btn btn-primary"  />
							</fieldset>
						</div>
					</form>
					
					<?php
						
					?>
					</div>
				</div>
			</div>
			
			
		</div>
		<div class="container well" style="margin-top:-20px">
		<?php
			 include "foother.php";
			 ?>
			 </div>
	</body>
	</div>
</html>