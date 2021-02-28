<?php 

$servername = "http://libraryspace.jonasgodfrey.com";
$username = "stsainit_libuser";
$password = "myj,JNaY0hnH";
$database = "stsainit_libspacedb";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Database connection failed: ". $conn->connect_error);
}



?>




