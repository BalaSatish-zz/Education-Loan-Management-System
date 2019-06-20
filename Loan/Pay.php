<?php
include_once 'header.php';
session_start();
if(isset($_SESSION['name']) and isset($_POST['WithdrawalBalance']) and isset($_SESSION['Withdraw']))
{
include "../BankingMethods/dbdetails.php";
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
$WBal=mysqli_real_escape_string($Connect,$_POST['WithdrawalBalance']);
if($intbal<$WBal or $WBal<0 or $WBal==0){
echo'<h3 style="color:red;">***Insufficient! Balance... OR ...Invalid! Input***</h3>';
echo'<a href="../BankingMethods/Deposit.php">Click Here for Deposit Page</a><br>';
echo'<a href="PayInterest.php">Click Here for Previous Page</a><br>';
}
else if($intbal >= $WBal){
$TotalBal = $intbal - (int)$WBal;
$sql1=("update bankaccount set Balance='$TotalBal',InterestAmount='$WBal' where mobileno='$mobile'");
mysqli_query($Connect,$sql1);
echo'<h3 style="color:green;">***Payment Sucessfull***</h3><a href="PayInterest.php">Click Here for Previous Page</a>';
//header('Location:Withdrawal.php');
}
}
}
else
{echo '<body><h2 style="color:red;">Error! occured.</h2><a href="PayInterest.php">Click Here for Previous Page</a></body>';}
unset($_SESSION['Withdraw']);
?>
