<?php
session_start();
if(isset($_SESSION['name']) and isset($_POST['AccountNo2']) and isset($_SESSION['Transfer']))
{
include "dbdetails.php";
$mobile = $_SESSION["mobile"];
$name = $_SESSION["name"];

$Account2 = mysqli_real_escape_string($Connect,$_POST['AccountNo2']);
$TransAmount = mysqli_real_escape_string($Connect,$_POST['TransferAmount']);
$TransAmount = (int) $TransAmount;
$sql="select * from bankaccount where mobileno='$mobile';";
$result=mysqli_query($Connect,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck==true)
{
$row = mysqli_fetch_assoc($result);
$balance = $row["Balance"];
$intbal = (int)$balance;
$WBal=mysqli_real_escape_string($Connect,$_POST['TransferAmount']);
if($intbal<$WBal or $WBal<0 or $WBal==0){
echo'<h3 style="color:red;">***Insufficient! Balance... OR ...Invalid! Input***</h3><a href="Deposit.php">Click Here for Deposit Page</a>';
}
else if($intbal >= $WBal){
//--------------------------------------------------------------------------------------------------------------
$sql2="select * from bankaccount where mobileno='$Account2';";
$result2=mysqli_query($Connect,$sql2);
$resultcheck2=mysqli_num_rows($result2);
	if($resultcheck2==true)
	{
	if($mobile!=$Account2){
	$TotalBal = $intbal - (int)$WBal;
	$sql1=("update bankaccount set Balance='$TotalBal' where mobileno='$mobile'");
	mysqli_query($Connect,$sql1);
	$row2 = mysqli_fetch_assoc($result2);
	$balance2 = $row2["Balance"];
	$intbal2 = (int)$balance2;	
	$TotalBal2 = $intbal2 + (int)$TransAmount;
	$sql3=("update bankaccount set Balance='$TotalBal2' where mobileno='$Account2'");
	mysqli_query($Connect,$sql3);
	header('Location:Transfer.php');
	}
	else{echo'<h3 style="color:red;">***Self Transfer Error!***</h3><a href="Transfer.php">Click Here for Previous Page</a>';}
}
else{echo'<h3 style="color:red;">***Invalid Credentials***</h3><a href="Transfer.php">Click Here for Previous Page</a>';}
}
}
}
else
{echo '<body><h2 style="color:red;">***Error! occured***</h2><a href="Transfer.php">Click Here for Previous Page</a></body>';}
unset($_SESSION['Transfer']);
?>
