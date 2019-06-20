<?php
include_once 'header.php';
session_start();
if(isset($_SESSION['name']))
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
$ALAmount = $row["ApprovedLoanAmount"];
$GLAmount = $row["GivenLoanAmount"];
$IRate = $row["InterestRate"];
$Time = $row["Time"];
$intbal = (int)$balance;
$p=(int)$GLAmount;
$t=(int)$Time;
$r=(int)$IRate;
$Total = ($p*$t*$r)/100;
$Total = (int) $Total;
echo '<h1 align="center">Loan Details</h1>';
echo '<font color="red" style="font-size:25px;">Account Details</font><br>';
echo "<b>Account Holder Name:</b><em>  $name</em><br>";
echo "<b>Account Number:</b><em>  $mobile</em><br>";
echo "<b>Current Balance (in INR):</b><em>  $intbal.00</em><br><br>";
echo '<font color="red" style="font-size:25px;">Active Loan Details</font><br>';
echo "<b>Approved Loan Amount (in INR):</b><em>  $ALAmount.00</em><br>";
echo "<b>Given Loan Amount (in INR):</b><em>  $GLAmount.00</em><br>";
echo "<b>Rate of Interest:</b><em>  $IRate%</em><br>";
echo "<b>Time (in years):</b><em>  $Time</em><br><br>";
echo "<b>Interest Per Month (in INR):</b><em>  $Total.00</em><br>";
}
}
?>
