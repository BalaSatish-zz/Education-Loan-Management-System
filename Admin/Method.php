<?php
include_once '../BankingMethods/dbdetails.php';
session_start();
$coltype="";
$data="";
$tablename="";
if(isset($_POST['Submit1']) and !empty($_POST['data1']) and $_POST['coltype1']!="empty" ){
$tablename=$_POST['Submit1'];
echo "$tablename<br>";
$coltype=mysqli_real_escape_string($Connect,$_POST['coltype1']);
$data=mysqli_real_escape_string($Connect,$_POST['data1']);
echo "".$coltype."<br>";
echo "".$data."<br>";
}
if(isset($_POST['Submit2']) and !empty($_POST['data2']) and $_POST['coltype2']!="empty" ){
$tablename=$_POST['Submit2'];
echo "$tablename<br>";
$coltype=mysqli_real_escape_string($Connect,$_POST['coltype2']);
$data=mysqli_real_escape_string($Connect,$_POST['data2']);
echo "".$coltype."<br>";
echo "".$data."<br>";
}
if(isset($_POST['Submit3']) and !empty($_POST['data3']) and $_POST['coltype3']!="empty" ){
$tablename=$_POST['Submit3'];
echo "$tablename<br>";
$coltype=mysqli_real_escape_string($Connect,$_POST['coltype3']);
$data=mysqli_real_escape_string($Connect,$_POST['data3']);
echo "".$coltype."<br>";
echo "".$data."<br>";
}
if(!empty($coltype) and !empty($data)){
$Account= $_SESSION['Account'];
$Checkvar;
if($tablename=="accountcreation")
{$Checkvar="mobno";}
else
{$Checkvar="mobileno";}
$sql="update $tablename set $coltype='$data' where $Checkvar='$Account';";
//echo"$sql<br>";
mysqli_query($Connect,$sql);
echo "Data Updated Successfully...!<br>";
echo"<a href='AccountDetails.php'>Click Here to go to previous Page</a>";
}else if(empty($coltype) and empty($data)){
echo "".$coltype."<br>";
echo "".$data."<br>";
echo "Empty Values Found.";
}
?>