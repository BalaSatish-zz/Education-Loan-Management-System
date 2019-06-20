<?php
session_start();
if(isset($_SESSION['name']) and isset($_POST['DepositBalance']) and isset($_SESSION['Deposit']))
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
$DBal=mysqli_real_escape_string($Connect,$_POST['DepositBalance']);
$TotalBal= $intbal + $DBal;
$sql1=("update bankaccount set Balance='$TotalBal' where mobileno='$mobile'");
mysqli_query($Connect,$sql1);
unset($_SESSION['Deposit']);
header('Location:Deposit.php');
}
unset($_SESSION['Deposit']);
}
else
{unset($_SESSION['Deposit']);
echo '<body><h2 style="color:red;">Error! occured.</h2><a href="Deposit.php">Click Here for Previous Page</a></body>';}

?>
