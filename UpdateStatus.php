<?php
ob_start();  
session_start();
 include "home.php";
 include "function.php";  
 if(!is_admin($_SESSION['id'])){
	 
	 header('Location:Project.php');
	 die();
	  
 }
 ?>
 
 
 
     <form action="update_process.php"method="post">

		<div align="center">
				<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend><h2>Status Update</h2></legend>
								</br>
							
				
				
								<p style="margin-left:20px">	<label for='Status' >Update Status below*</p>
				<textarea type='longtext' name='status' maxlength="3000" style="margin-left:140px;height:200px;width:400px"required/></textarea> </label>
							
								 
								
			
								<h3>
									<label for='date' ><p style="margin-left:-90px">Date*</style>
									<input  name='date' type='date' maxlength="50" style="margin-left:1px;height:40px"required/></label>
								</h3>
								    
								
							
								
								<input type="reset" value="reset" class="btn btn-danger" />
								<input type="submit" value="Submit" class="btn btn-primary"  />
							</fieldset>
						</div>
					</form>
					
