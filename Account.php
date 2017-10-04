<?php


ob_start();
     session_start();
include "home.php";
include "function.php";
?>
  
  <div class="container">
  <div class="row" style="font-family:Eutemia;">

 <form action="Account_process.php"method="post">

		<div align="center">
				<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend><h3>Change Password</h3></legend>
								</br>
							
				
				                     
								<h3>
									<label for='username' ><p style="margin-left:-90px">username</style>
									<input  name='username' type='varchar' maxlength="50" style="margin-left:1px;height:40px"required/> </label>
									
								</h3>
								    
								 
								
			
								<h3>
									<label for='password' ><p style="margin-left:-90px">Password</style>
									<input  name='password' type='int' maxlength="50" style="margin-left:1px;height:40px" required/> </label>
									
								</h3>
								    
								
							
								
								<input type="reset" value="reset" class="btn btn-danger" />
								<input type="submit" value="Submit" class="btn btn-primary"  />
							</fieldset>
						</div>
					</form>
					</div>
					
  
  
  <?php
  include "foother.php";
  ?>