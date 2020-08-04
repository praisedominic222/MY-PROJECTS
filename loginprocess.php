<?php

require_once ('db.php');

$email = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from `users` WHERE username = '$username' AND password = '$password'";
$sqlid = "SELECT id from `users` WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){
	
	$users = mysqli_fetch_array($id);
	$users = ($users['id']);
	

	//echo ("logged in");
	//echo ("$empid");
	
	header("Location: ..//homepage.html");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>