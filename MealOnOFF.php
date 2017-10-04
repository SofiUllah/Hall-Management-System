<?php

ob_start();
     session_start();
include "home.php";
include "function.php";

?>
 <div class="container well"style=" margin-top:-20px;">
<div class="go" >
<div class="row"><div class="span4"></div>
<div class="span4 well"style="font-family:Eutemia;font-size:16px">
 <form action="Meal_process.php" method="post">
						<div align="center">
							<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend><h4>Write Valid Date for Meal Off</h4></legend>
					
					<?php
					
			            		
						
						if($_GET['error']==i){
		                                echo '<script>alert("Please enter Valid Date ")</script>';
	                   }
						
					
					
					 if($_SESSION['from']>$_SESSION['to'])
                     {
	                                   echo 'Type to greater than from '."<br>";
                      }?>
					  
								</br>
								
								<h3>
									<label for='username' >DayFrom*:</label>
				                  <input name='From' type="Date" maxlength="50" style="margin-left:30px;height:40px"/>
								</h3>
								<h3>
									<label for='username' >To*:</label>
				<input  name='To' maxlength="50" type="Date" style="margin-left:30px;height:40px"required/>
								</h3>
								 </br>
								 
								<input type="reset" class="btn btn-danger" value="reset" />
								<input type="submit" class="btn btn-success"  name="submit" value="Submit"  />
							</fieldset>
						</div>
</form>
</div>
<div class="span3"></div>
</div>
<?php
  include "foother.php";
  ?>