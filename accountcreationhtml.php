<?php 
include_once 'header.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Education Loan Management System</title>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    width:100%;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}


</style>
</head>
<body>
<div class="container">
 
  <div class="row">
    <div class="column">
       <img src="img3.jpg"style="width:100%;height:800px">
    </div>
    <div class="column">
<h1>Registration Details</font></h1>
<form action="accountcreation.php" method="post"><br/>
<input type="text" name="email" placeholder="Email"/><br/>
<input type="password" name="password1" placeholder="Password"/><br/>
<input type="password" name="password2" placeholder="Confirm password"/><br/>
<input type="text" name="name" placeholder="Name"/><br/>
<input type="text" name="fname"placeholder="Fathername" /><br/>
<input type="text" name="dob" placeholder="Date of Birth (DD/MM/YYYY)"/><br/>
<input type="text" name="address" placeholder="Present address of Student"/><br/>
<input type="text" name="permanentaddress"placeholder="Permanent address of student"/><br/>
<input type="text" name="mobno"placeholder="Mobilenumber"/><br/>
<input type="text" name="city"placeholder="City"><br/>
<input type="text" name="state"placeholder="State"><br/>

<input type="submit" name="Continue" value="Continue"/>
</table>	
</form>
</body>
</html>
