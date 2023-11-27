<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "SterlingEMS";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>