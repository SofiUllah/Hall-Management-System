<?php
ob_start();
include "home.php";
include "function.php";

  if(is_admin($_SESSION['id'])){
	?>  
	  <form action="PRDues.php" method="post">
						<div align="center">
							<fieldset style='' style="margin: 100 auto ; width:500px; border-radius:5px;color:black;">
							
					<legend> <h2>Due Management </h2></legend>
								<h3>
									<label for='username' >UserName*:</label>
				<input type='text' name='username' maxlength="50" style="margin-left:30px;height:40px"required/>
								</h3>
								<h3>
									<label for='username' >PrevDuesPaid*:</label>
				<input name='PrevDue' type="text" maxlength="50" style="margin-left:30px;height:40px"/>
								</h3>
								<h3>
									<label for='TotalDues' >Total Dues*:</label>
				<input  name='TotalDue' maxlength="50" type="int" style="margin-left:30px;height:40px"required/>
								</h3>
								 </br>
								 
								<input type="reset" value="reset" />
								<input type="submit" name="submit" value="Submit"  />
							</fieldset>
						</div>
</form>
<?php

  }
?>