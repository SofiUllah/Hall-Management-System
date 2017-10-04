<?php
include"database.php";
?>

<html>
<head>

</head>
<body>

<?php
if(isset($_POST['sub'])){
	$fr=$_POST['from'];
	$to=$_POST['to'];
	$tot=($to-$fr)*40;
	$sql="
}

$total=1200-$tot-$total;
echo $total;



?>

<form action="meal.php" method="post">
                 From:<input type="text" name="from" placeholder="enter date " />
				  To:<input type="text" name="to" placeholder="enter date " />
<input type="submit" class="btn btn-primary" name="sub" value="submit" />
</form>
</body>
</html>