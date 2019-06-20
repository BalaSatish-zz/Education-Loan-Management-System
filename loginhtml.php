<?php 
include_once 'header.php';
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
if(isset($_SESSION["name"]))
{
echo "".$_SESSION['name'];
header('Location:uploadhtml.php');
}
?>
<title>Education Loan Management System</title>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 40%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=password] {
    width: 40%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}



input[type=submit] {
    background-color: #4CAF50;
    color: white;
    width:40%;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}




</style>
</head>
<body align="center">
<h1>Login Page</h1>
<form action="login.php" method="post">

<input type="text" name="mobno" placeholder="Mobile Number"/><br><br>
<input type="password" name="password" placeholder="Password"/><br><br>
<input type="submit" name="Continue" value="Continue"/>

</form>
</body>
</html>