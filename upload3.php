<?php 
include_once 'header.php';
?>
<?php
session_start();
if(isset($_FILES['UploadFileField'])){ 
$name= $_SESSION["name"];
$mobile=$_SESSION["mobile"];
echo $mobile;
$UploadName=$_FILES['UploadFileField']['name'];
$UploadName=$mobile.".pdf";
$UploadTmp=$_FILES['UploadFileField']['tmp_name'];
$UploadType=$_FILES['UploadFileField']['type'];
$FileSize=$_FILES['UploadFileField']['size'];

$UploadName=preg_replace("#[^a-z0-9.]#i","",$UploadName);
if(($FileSize>125000)){
die("Error-File to Big");
}
if(!$UploadTmp){
die("No File Selected, Please Upload Again");
}else{
move_uploaded_file($UploadTmp,"Upload/FeeStructure/$UploadName");
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="loan";
$Connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
$x="true";
$sql=("update status set uploadstatus3='$x' where mobileno='$mobile'");
mysqli_query($Connect,$sql);
header('Location:uploadhtml.php');
echo " Upload Successfull...!";
}
}
?>
