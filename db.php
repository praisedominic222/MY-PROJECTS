<?php

$servername = "localhost:3112";
$dBUsername = "root";
$dbPassword = "";
$dBName = "erricode";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>