<?php 
include_once 'header.php';
?>
<?php
$dbServerName="localhost";
$dbUserName="admin";
$dbPassword="Bunny8520";
$dbName="loan";
$Connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

$email = "Admin";
$password = md5("123456");
$value = "false";

$sql = "insert into admin(email,password,value) values ('$email','$password','$value');";

$result = mysqli_query($Connect,$sql);

	echo ("successfully created an Admin account");
?>
