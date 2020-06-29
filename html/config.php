<?php

$dbhost= "localhost";
$dbuser = "root";
$dbpass = "";
$db = "final_project";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)
	or die("Error " . mysqli_error($conn));
?>