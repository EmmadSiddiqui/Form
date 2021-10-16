<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn){
	// echo "connection active";
}
else{
	// echo "connection failed".mysqli_connect_error();
}


?>
