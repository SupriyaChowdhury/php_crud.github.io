<?php

$server_name = "localhost";
$user_name = "root";
$password = "root";
$db_name = "user_management";

$conn = mysqli_connect($server_name,$user_name,$password,$db_name);

if(!$conn){
	die("Connection Failed". mysqli_connect_error());
}

?>