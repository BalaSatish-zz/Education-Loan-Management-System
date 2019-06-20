<?php 
include_once 'header.php';
?>
<?php 
session_start();
echo "<html><h1>Hi ".$_SESSION["name"]."</h1></html>";
$mobile=$_SESSION["mobile"];
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="loan";
$Connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
$sql="(select * from status where mobileno='$mobile');";
$result=mysqli_query($Connect,$sql);
$resultcheck=mysqli_num_rows($result);
if($result==true)
{
$row = mysqli_fetch_assoc($result);
$status1 = $row['uploadstatus1'];
$status2 = $row['uploadstatus2'];
$status3 = $row['uploadstatus3'];
$verificationstatus = $row['verificationstatus'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Education Loan Management System</title>
<style>

* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #6a5acd;
    color: white;
    width:100%;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #6a5acd;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}
<style>


</style>
</head>
<body align='center'>

       <img src="images2.jpg"style="width:100%;height:500px">
    
<h1>Apply for Loan</h1>
<h3>Upload all the required documents to apply for loan.</h3>
<table border=0 align="center">
<tr><td colspan='2' align='center'>Upload only pdf files</td></tr>
<tr><td><font face="verdana" color="red">Government Proof</font></td>
<td><form action='uploadhtml1.php' method='post' enctype='multipart/form-data' name='FileUploadForm' id='FileUploadForm'>
<input type='submit' value='Upload'<?php if($row['uploadstatus1']=='true'){echo 'disabled';}?> ></input>
</form>
</td></tr>
<tr>
<tr><td><font face="verdana"color="green" >Income Proof</font></td>
<td>
<form action='uploadhtml2.php' method='post' enctype='multipart/form-data' name='FileUploadForm' id='FileUploadForm'>
<input type='submit' value='Upload' <?php if($row['uploadstatus2']=='true'){echo 'disabled';}?> ></input>
</form>
</td></tr>
<tr>
<tr><td><font face="verdana" >Fee Structure</font></td>
<td>
<form action='uploadhtml3.php' method='post' enctype='multipart/form-data' name='FileUploadForm' id='FileUploadForm'>
<input type='submit' value='Upload' <?php if($row['uploadstatus3']=='true'){echo 'disabled';}?> ></input>
</form>
</td></tr>
</table>
</form>
<b><?php if($row['uploadstatus1']=='true' && $row['uploadstatus2']=='true' && $row['uploadstatus3']=='true')
		{ 
		echo "<br><br>";
		echo "Verification status: ".$row['verificationstatus']."<br><br>";
		echo "Loan Approval status: ".$row['verificationstatus']."<br><br>";
		}
	if(!($row['uploadstatus1'] =='true' && $row['uploadstatus2']=='true' && $row['uploadstatus3']=='true'))
		{echo "please upload all the documents to start verification.";}?><b>
</body>
</html>