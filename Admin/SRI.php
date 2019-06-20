<?php
include"header.php";
include_once"../BankingMethods/dbdetails.php";
$sql = 'update bankaccount set InterestAmount="0"';
mysqli_query($Connect,$sql);
echo "<b style='color:green; font-size:30px;'>***Started***</b><br> Now all the Users can pay their monthly loan payments in their account through 'Pay Now' option";
?>
