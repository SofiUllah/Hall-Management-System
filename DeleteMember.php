 <?php
  include "database.php";
   include "home.php";
  ?>
 <form action="delmem_process.php"method="post">

		<div align="center">
				<fieldset  style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend><h2>Delete Member </h2></legend>
								</br>
							
				
				    <h3>
									<label for='username' ><p style="margin-left:-90px">username*</style>
									<input  name='username' type='text' maxlength="50" style="margin-left:1px;height:40px"required/></label>
								</h3>
								    
								 
							
							
								
								<input type="reset" value="reset" class="btn btn-danger" />
								<input type="submit" value="Submit" class="btn btn-primary"  />
							</fieldset>
						</div>
					</form>