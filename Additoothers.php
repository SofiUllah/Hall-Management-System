 <?php
   include "database.php";
  ?>
<div class="container">
 <form action="Addi_process.php"method="post" name="ii" enctype ="multipart/form-data" >

		<div align="center">
				<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend><h2>Add image to others page</h2></legend>
								</br>
							
				
				
					  <p style="margin-left:20px">	<label for='Status' >addimage*</p>
				    <input type='file' name='image_file' class="required input_field" />
					
								 
								
			
								<h3>
									<label for='description' ><p style="margin-left:-90px">description*</style>
									<input  name='title' type='varchar' maxlength="100" style="margin-left:1px;height:40px"required/></label>
								</h3>
								    
								
							
								
								<input type="reset" value="reset" class="btn btn-danger" />
								<input type="submit" value="Submit" class="btn btn-primary"  />
							</fieldset>
						</div>
					</form>
					</div>
  