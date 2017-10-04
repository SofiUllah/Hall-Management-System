 <?php
  include "database.php";
  include 'home.php';
  $username= $_POST['username'];
  $sql = "DELETE FROM register WHERE username='$username'";

if (@mysql_query($sql)) {?>
       <h3 style="color:red"><?php echo "You deleted ".$username. "'s membership from this hostel  successfully";?></h3>
	   <?php
} else {
    echo "Error deleting record: " . @mysql_error();
}

mysql_close();

?>