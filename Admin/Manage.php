<?php
include_once 'header.php';
 session_start();
?>
<!Doctype html>
<head>
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
<br>
<h1>Account Management</h1>
<form action="AccountDetails.php" method="POST">

<input type="text" name="Account" id="Account" placeholder="Account Number"></input></br></br>
<input type="submit" name="submit" id="submit" value="Submit" onclick="<?php $_SESSION['Account']=1;?>"></input>

</body>
