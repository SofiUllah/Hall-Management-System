<?php

require 'database.php';

$sql = "INSERT INTO `update` (Status) VALUES ('john@example.com')";

if (@mysql_query($sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" ;
}
die();


$sql = "INSERT INTO MyGuests (email, firstname, lastname) VALUES ('tom@example.com', 'Tom', 'Abc')";

if (@mysql_query($sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error();
}


$sql = "INSERT INTO MyGuests (email, firstname, lastname) VALUES ('jerry@example.com', 'Jerry', 'Def')";

if (@mysql_query($sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error();
}

mysql_close();

?>