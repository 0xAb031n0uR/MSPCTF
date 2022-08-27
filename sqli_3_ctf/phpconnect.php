<?php

$hostname = "localhost";
$username = "mostafa";
$password = "password";
$db = "newdatabase";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
	die("Database connection failed: " . $dbconnect->connect_error);
}

?>
