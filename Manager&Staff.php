<?php


ob_start();
     session_start();
include "home.php";
include "function.php";
?>

 <div class="container well"  style="margin-top:-20px">
 <div class="row">
 <div class="span2">
   <div class="btn-group-vertical">
   <a href="admission.php" style="margin-bottom:2px"class="btn btn-primary">admission</a>
     <a href="provost.php" style="margin-bottom:2px"class="btn btn-primary">provost</a>
	<a href="Manager&Staff.php" style="margin-bottom:2px"class="btn btn-primary">Manager&Staff</a>
	  <a href="Boarders.php" style="margin-bottom:2px"class="btn btn-primary">Boarders</a>
	  </div>
	  </div>
  <div class="span6 well"  style="margin-top:-20px">
    <p> Current Manager of Fazlul Haque hall is <strong>Sanuar</strong> Hossain,ME 4the year</p><br>
	It has been known to all that manager of the hall is selected for one month.After one month manager may be changed<br>
	But if he does good during current month , then he may be selected again by students choice.But one thing is mentioned
	that hall authority keep full ability to keep current manager or selected another.Applying for dinning manager
	there should be follows some rules .Here these goes..<br>
	
	 <strong>1.</strong>Firstly he will be boarder of this hall permanently<br>
	    <strong>2.</strong>Secondly he will be a at least third year student of this university<br>
		 <strong>3.</strong>After one month he must be understand the authority of the maintenance of one month strictly<br>
		  <strong>4.</strong>If he doesn't understand the maintenace properly,action may be taken or charge may taken from him<br>
  </div>
  </div>
  </div>
  <div class="container well"  style="margin-top:-20px">	 
  <?php
  include "foother.php";
  ?>
  </div>