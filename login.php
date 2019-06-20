<?php 
include_once 'header.php';
?>

<?php
$dbServerName="localhost";
$dbUserName="admin";
$dbPassword="Bunny8520";
$dbName="loan";
$Connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

session_start();
if(isset($_SESSION["name"]) or isset($_SESSION["admin"]))
{
header('Location:index.php');
}
else{
if(isset($_POST['Continue'])){
	$mobno=mysqli_real_escape_string($Connect,$_POST['mobno']);
	$password=md5(mysqli_real_escape_string($Connect,$_POST['password']));
$sql0="select * from admin where email='$mobno' and password='$password'";
$result0=mysqli_query($Connect,$sql0);
$resultcheck0=mysqli_num_rows($result0);
if($resultcheck0==true)
{
$row0 = mysqli_fetch_assoc($result0);
$admin = $row0["value"];
if($admin=="true"){
echo "working...!";
$_SESSION["admin"]="admin";
header('Location:index.php');
}
else{echo "Sorry you are not allowed to access.";}
}else{
$sql1="select * from accountcreation where mobno='$mobno' and password='$password'";
$result=mysqli_query($Connect,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck==true)
{
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$_SESSION["name"]=$row['name'];
$_SESSION["mobile"]=$row['mobno'];
header('Location:index.php');
}
else
{
echo'<h3 style="color:red;">***Invalid Credentials***</h3><a href="loginhtml.php">Click Here for Previous Page</a>';
}
}
}
} ?>

