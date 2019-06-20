<?php
session_start();
include_once '../BankingMethods/dbdetails.php';
if(isset($_SESSION['Account'])){
$m = $_SESSION['Account'];
$sql='select * from bankaccount where mobileno="$m";';
$result=mysqli_query($Connect,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck==true)
{
$row = mysqli_fetch_asssoc($result);
$name = $row['name'];
echo "$name";
}
}
?>