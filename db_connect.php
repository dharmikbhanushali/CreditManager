<?php

$servername="localhost";
$username="root";
$password="";
$databasename="credit";

//create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

//check connection
if(!$conn){
	die("connection failed:" . mysqli_connect_error());
}
echo "connection successful";
?>