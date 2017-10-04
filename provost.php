<?php


ob_start();
     session_start();
include "home.php";
include "function.php";
?>
<div class="container">
<div class="row">
<div class="span3">
    <div class="btn-group-vertical">
   <a href="admission.php" style="margin-bottom:2px"class="btn btn-primary">admission</a>
     <a href="provost.php" style="margin-bottom:2px"class="btn btn-primary">provost</a>
	<a href="Manager&Staff.php" style="margin-bottom:2px"class="btn btn-primary">Manager&Staff</a>
	  <a href="Boarders.php" style="margin-bottom:2px"class="btn btn-primary">Boarders</a>
	  </div>
	  </div>
<div class="span5 well">
 <strong> Dr Kazi ABM Mohiuddin</strong>,current provost of Fazlul haque hall</br>
  department of Civil Engineering of KUET.</br>
  and the associate provost is <strong>Dr Narwattom kumar Rai</strong></br>
   Department of Electrical and Electronic Engineering,KUET<br>
   With their proper care and looking, this hall remains a good and best 
   studious environment among all others hall.Note that before him,former provost 
   of this  hall was Proffessor Dr Md Sheikh Saddi,Head of the Department,
   Computer Science and Engineering.Many glorious heroic sons of country are 
   from this Fazlul Haque Hall.However o f course it is the best hall in 
   <a href="kuet.ac.bd">Khulna University of Engineering & Technology </a>.
   campus
   </div>
   <div class="span3 well">
   <p style="font-family:arial;font-size:16px;color:green"><b>Provosts at a glance</b> </p>
   
<div id='showCD'></div><br>
<input type="button" onclick="previous()" value="<<">
<input type="button" onclick="next()" value=">>">

<script>
var i = -1;
displayCD(i);

function displayCD(i) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            myFunction(xmlhttp, i);
        }
    };
    xmlhttp.open("GET", "cd_catalog.xml", true);
    xmlhttp.send();
}

function myFunction(xml, i) {
    var xmlDoc = xml.responseXML; 
    x = xmlDoc.getElementsByTagName("CD");
    document.getElementById("showCD").innerHTML =
    "NAME: " +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "<br>Designation: " +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>Contac: " + 
	 x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "<br>Email: " + 
	x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue +
    "<br>Department: " + 
	x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
    "<br>Year: " + 
    x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue;
}

function next() {
if (i < x.length-1) {
  i++;
  displayCD(i);
  }
}

function previous() {
if (i > 0) {
  i--;
  displayCD(i);
  }
}
</script>



   
   
   
   </div>
   </div>
  <div class="container well">	 
  <?php
  include "foother.php";
  ?>
  </div>
  </div>
  