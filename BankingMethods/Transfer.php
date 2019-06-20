<?php
include_once 'header.php';
session_start();
if(isset($_SESSION['name']))
{
{
include "dbdetails.php";
$mobile = $_SESSION["mobile"];
$name = $_SESSION["name"];
$sql="select * from bankaccount where mobileno='$mobile';";
$result=mysqli_query($Connect,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck==true)
{
$row = mysqli_fetch_assoc($result);
$balance = $row["Balance"];
$intbal = (int)$balance;
echo "<h1><b>Account Number: $mobile</b></h1><br>";
echo "<h1><b>Current Balance: $intbal</b></h1><br>";
}
}
}
?>
<!Doctype html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

input[type=number] {
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
<form action="TransferMethod.php" method="POST">
Benificiary Account Number: <input type="number" name="AccountNo2" id="AccountNo2" placeholder="   ex: ***6697***"><br>
Amount to Transfer (in INR): <input type="number" name="TransferAmount" id="TransferAmount" placeholder="   ex: 100 "><br>
<input type="Submit" name="Submit" onclick="<?php $_SESSION['Transfer']=1;?>">
</form>
</body>
</html>
