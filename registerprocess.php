<?php

require_once ('db.php');

$username = $_GET['username'];
$password = $_GET['password'];

    $sql = "INSERT INTO `user`(`id`, `username`, `password`) VALUES ('','$username','$password')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='create-user.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}



?>