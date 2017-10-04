<?php

function sqlToXml($queryResult, $rootElementName, $childElementName)
{ 
    $xmlData = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n"; 
    $xmlData .= "<" . $rootElementName . ">";
 
    while($record = @mysql_fetch_object($queryResult))
    { 
        /* Create the first child element */
        $xmlData .= "<" . $childElementName . ">";
 
        for ($i = 0; $i < @mysql_num_fields($queryResult); $i++)
        { 
            $fieldName = @mysql_field_name($queryResult, $i); 
 
            /* The child will take the name of the table column */
			
            $xmlData .= "<" . $fieldName . ">";
 
            /* We set empty columns with NULL, or you could set 
                it to '0' or a blank. */
            if(!empty($record->$fieldName))
                $xmlData .= $record->$fieldName; 
            else
                $xmlData .= "null"; 
 
            $xmlData .= "</" . $fieldName . ">"; 
        } 
        $xmlData .= "</" . $childElementName . ">"; 
    } 
    $xmlData .= "</" . $rootElementName . ">"; 
 
    return $xmlData; 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "association";


$conn = @mysql_connect("localhost", "root", "");

   @mysql_select_db($dbName, $conn);

$result = @mysql_query("SELECT * from register");

header("Content-Type: application/xml");
echo sqlToXml($result,"Clients","client");
?>