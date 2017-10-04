  <?php
   session_start();
   ?>
   
<html lang="en" style="font-family:arial">
<head>
<script>

  
    function info(str) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;				
            }
        }
        xmlhttp.open("GET","ajax.php?q="+str,true);
        xmlhttp.send();
   
}

</script>
  <title>Hall Management</title>
  <meta charset="utf-8">
  


   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
   
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
  
  
  
  <meta name="viewport" content="width=device-width:70%, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
	
  <script src="ajax/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,

  .carousel-inner > .item > a > img {
     width:70%;
	 height:50%;
     margin: auto;
	 margin-top:0px;
	
  }
 
  </style>
</head>


<body style="bgcolor:black;margin:auto 70px 30px">

<div class="container well" style="background-color:lavender;margin-left:0px">
  <div class="row-fluid" >
   <div class="span2" style="background-color:lavender;"> <img class="img img-round" src="images/go.png"></img>
   <br />
  <div class="row">
  <div class="span3"></div>
  <div class="span9">
   <img class="img img-round" src="images/kuetpic.png"></img>
   
   </div>
  
   </div>
   </div>
    <div class="span7" style="background-color:lavender">
	        <div class="row">
			<div class="span2"> </div>
			<div class="span10">
			<div class="row">
			 <div class="span3"></div> <div class="span9">Knowledge is power </div> </div>
			 <div class="row">
			 <div class="span2"></div>
			  <div class="span10">  <h2> Fazlul Haque Hall  </h2> </div></div>
			   <div class="row">
			 <div class="span12"><h4>&nbsp;&nbsp;&nbsp;&nbsp;  Khulna University of Engineering & Technology  </h4></div>
			 </div>
			  
	           
				</div>
			</div>
       
	</div>
    <div class="span3">
	
<div class="row">
<div class="span3">

</div>

	
<div class="span9">
<p id="demo"></p></div>
</div>

<script>

var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();

</script>

	<a href="Others.php" class="btn btn-success">Gallery</a>
	<a href="convertingSQLtoXML.php" class="btn btn-success">AllMembers</a> <br /> <br />
	
<div class="row "> 
<div class="span12">
  <form>
  <input type="text"placeholder="Search by registered name....."  onkeyup='info(this.value)'  required />
  <input type="button"style="margin-top:-10px" value=" Search" > 
  
  
 </form>
	
<div id="txtHint" style="width:25%;margin-left:5%"> </div>			
  </div>
  
	 
	 </div>
	 </div>
	
	</div>
	<b><p style="color:pink;float:right;font-size:19px;margin-bottom:-30px">
<?php
if(isset($_SESSION['id'])  ){  
	   echo "Hellow  ".$_SESSION['username']."!!"."<br>";
}
 else if(isset($_COOKIE['username']))
{
	 echo "Hellow  ".$_COOKIE['username']."!!"."<br>";
}
else
{
	echo '';
}
?>
  
   </p></b>

<div class="container" margin-top="-30px">
<div class="btn-group btn-group-justified">
<div class="fix nav"style="margin-bottom:-85px;margin-left:18px;margin-top:-15px;">

<a href="Project.php"class="btn btn-info">Home</a>

<a href="about.php"class="btn btn-info">About</a>

<a href="Others.php"class="btn btn-info">Others</a>
</div>
</div>
	  	   

<marquee width="66%" direction="left-right"  onmouseover="this.stop();" onmouseout="this.start();"
  height="-7px"bgcolor="#E6E6FA" scrollamount="5" loop="-1" margin-bottom="-20px" >
 <br>
 <br />

    <br>
		 
		    <?php
    
      include "database.php";
	
	$sql = "SELECT * FROM  `headmar`";
	$result = @mysql_query($sql);
		if(@mysql_num_rows($result) > 0){
			while($row = @mysql_fetch_assoc($result)){
	
				echo  $row["mes"]."<br>" ; 
			}
		}
		else{
			echo "No news....................";
		}
		
?>


   </marquee>
		   
</div>	
   
 <div style="margin-right:0px;margin-top:-25px;float:right;margin-left:-50px">  
  <?php 
   if(isset($_SESSION['id']) || isset($_COOKIE['username']) ){  
	   
              
	   ?>
     <a href="logout.php"class="btn btn-danger btn-round">logout</a>
	  <a href="Account.php"class="btn btn-info btn-round">Account</a>
	 
	<?php
   }
	else 
    {
		?>
		<a href="login.php" class="btn btn-info ">login</a>
		<a href="register.php" class="btn btn-info ">Registration</a>  <?php
	}		
	?>	
	

 </div> 

  </div> 
  </div>
  </div>
  </body>
