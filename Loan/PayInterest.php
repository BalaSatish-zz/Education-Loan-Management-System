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
$PayChecker = $row["InterestAmount"];
$intbal = (int)$balance;
$p=(int)$GLAmount;
$t=(int)$Time;
$r=(int)$IRate;
$Total = ($p*$t*$r)/100;
$Total = (int) $Total;
echo"<h3 style='color:red;'>"."Interest: $Total"."</h3>";
}
}
if($PayChecker==0){
echo "<!Doctype html>
<head>
</head>
<body>
<form action='Pay.php' method='POST'>
<input type='hidden' name='WithdrawalBalance' id='DepositBalance' value='$Total'/>
<Button type='Submit' name='Submit' onclick='";
$_SESSION['Withdraw']=1;
echo"'>Pay Now</Submit>
</form>
</body>
</html>"; 
}
else{
echo"<h3 style='color:green;'>"."No Payment Dues Found."."</h3>";
}

