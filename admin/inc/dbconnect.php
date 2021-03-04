<?php 

$servername = "d6rii63wp64rsfb5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "uaivyvws5hftpuio";
$password = "vj3n0zzivts1ovd8";
$database = "hwamyb1u07m6hoyd";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Database connection failed: ". $conn->connect_error);
}



?>




