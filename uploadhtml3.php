<?php 
include_once 'header.php';
?>
<?php 
session_start();
echo "<html><h2>Hi ".$_SESSION["name"]."</h2></html>";
?>
<!DOCTYPE html>
<html>
<head>

<title>Education Loan Management System</title>
</head>
<body align="center">
<h1><font color=green>Uploading documents</font></h1>
<form align="center" action="upload3.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
<table border=1 align="center">
<tr><td colspan="2" align="center">Upload only pdf files</td>
<tr><td>Fee Structure</td>
<td><input type="file" name="UploadFileField" id="UploadFileField"</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="UploadFileField"/></td></tr>
</table>
</body>
</html>