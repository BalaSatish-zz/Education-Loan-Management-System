<?php 
include_once 'header.php';
?>
<?php
session_start();
if(isset($_SESSION['name']))
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
echo "<h1><b>ACCOUNT HOLDER NAME: "."$name"."</b></h1><br>";
echo "<h1><b>ACCOUNT BALANCE: "."$balance"."</b></h1>";
}
}
?>
<!Doctype html>
<html>
<head>
<style>
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}
.modal{
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}



</style>
</head>
<body align="center">
<div class="btn">
<a href="BankingMethods/Deposit.php"><button onclick="document.getElementById('Deposit').style.display='block'" class="enter">Deposit</button></a>
<a href="BankingMethods/Withdrawal.php"><button onclick="document.getElementById('Withdrawal').style.display='block'" class="enter">Withdrawal</button></a>
<a href="BankingMethods/Transfer.php"><button onclick="document.getElementById('Transfer').style.display='block'" class="enter">Inter Bank Transfer</button></a>
<img src="pic1.jpg"style="width:100%;height:1000px">
</div>
<div id="login" class="modal">
            <span onclick="document.getElementById('Deposit').style.display='none'"
            class="close" title="Close Modal">&times;</span>
</div>


</div>
</body>
</html>