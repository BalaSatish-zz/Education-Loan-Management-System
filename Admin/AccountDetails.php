

<!-- -------------------------------------------------------------------Account Details------------------------------------------------------------------------- -->

<?php 
include_once 'header.php';
session_start();
include_once '../BankingMethods/dbdetails.php';
if(isset($_SESSION['admin']) and isset($_SESSION['Account'])){
if(isset($_POST['Account'])){
	$_SESSION['Account'] = $_POST['Account'];
}
$AccountNo=$_SESSION['Account'];
$SQL = "select * from accountcreation where mobno='$AccountNo';";
$Result = mysqli_query($Connect,$SQL);
$ResultCheck = mysqli_num_rows($Result);
if($ResultCheck == true){
$row = mysqli_fetch_assoc($Result);
$name = $row['name'];
$fname = $row['fname'];
$email = $row['email'];
$dob = $row['dob'];
$address = $row['address'];
$permanentaddress = $row['permanentaddress'];
$mobno = $row['mobno'];
$city = $row['city'];
$state = $row['state'];
echo "<h1 style='display:inline;'>Account Details</br></h1>";
echo "<b>Account Number:</b> ".$_SESSION['Account']."<br>";
//unset($_SESSION['Account']);
echo"<b>Name:</b> $name<br><b>Father Name:</b> $fname<br><b>Email:</b> $email<br><b>Date of Birth:</b> $dob<br><b>Address:</b> $address<br><b>Permanent Address:</b> $permanentaddress<br><b>Mobile Number:</b> $mobno<br><b>City:</b> $city<br><b>State:</b> $state<br>";
}
else{
echo "<b style='color:red; font-size:30px;'>***No Bank Account found with the Account Number: ".$_SESSION['Account']."***</b><br>";
//unset($_SESSION['Account']);
}
}else{
echo "<b style='color:red; font-size:30px;'>***Error! Occured.***</b><br>";
}
?>
<!Doctype html>
<head>

</head>
<body>
<form name="f1" action="Method.php" method="POST"> 
<select name='coltype1'>
<option value='empty'>(Select a data to change)</option>
<option value='name'>Name</option>
<option value='fname'>Father's Name</option>
<option value='email'>Email</option>
<option value='dob'>Date of Birth</option>
<option value='address'>Address</option>
<option value='permanentaddress'>Permanent Address</option>
<option value='city'>City</option>
<option value='state'>State</option>
</select>
<input type="text" name="data1" placeholder="Enter Data"/>
<button type="submit" name="Submit1" value="accountcreation">Submit</button><br>
<hr>
</body>
</html>


<!-- -------------------------------------------------------------------Bank Account------------------------------------------------------------------------- -->


<?php
if(isset($_SESSION['admin']) and isset($_SESSION['Account'])){
if(isset($_POST['Account'])){
	$_SESSION['Account'] = $_POST['Account'];
}
$AccountNo=$_SESSION['Account'];
$SQL1 = "select * from bankaccount where mobileno='$AccountNo';";
$Result1 = mysqli_query($Connect,$SQL1);
$ResultCheck1 = mysqli_num_rows($Result1);
if($ResultCheck1 == true){
$row1 = mysqli_fetch_assoc($Result1);
$mobileno = $row1['mobileno'];
$Balance = $row1['Balance'];
$InterestRate = $row1['InterestRate'];
$Time = $row1['Time'];
$ApprovedLoanAmount = $row1['ApprovedLoanAmount'];
$GivenLoanAmount = $row1['GivenLoanAmount'];
$InterestAmount = $row1['InterestAmount'];


echo "<h1 style='display:inline;'>Banking Details</br></h1>";
//unset($_SESSION['Account']);
echo "<b>Balance:</b> $Balance<br><b>InterestRate:</b> $InterestRate<br><b>Time:</b> $Time<br><b>Approved Loan Amount:</b> $ApprovedLoanAmount<br><b>Given Loan Amount:</b> $GivenLoanAmount<br><b>Interest Amount:</b> $InterestAmount<br>";
}
else{
echo "<b style='color:red; font-size:30px;'>***No Bank Account found with the Account Number: ".$_SESSION['Account']."***</b><br>";
//unset($_SESSION['Account']);
}
}else{
echo "<b style='color:red; font-size:30px;'>***Error! Occured.***</b><br>";
}
?>

<!Doctype html>
<head>
</head>
<body>
<form name="f2" action="Method.php" method="POST"> 
<select name='coltype2'>
<option value='empty'>(Select a data to change)</option>
<option value='balance'>Balance</option>
<option value='InterestRate'>InterestRate</option>
<option value='Time'>Time</option>
<option value='ApprovedLoanAmount'>Approved Loan Amount</option>
<option value='GivenLoanAmount'>Given Loan Amount</option>
<option value='InterestAmount'>Interest Amount</option>
</select>
<input type="text" name="data2" placeholder="Enter Data">
<button type="submit" name="Submit2" value="bankaccount">Submit</button><br>
<hr>
</body>
</html>


<!-- --------------------------------------------------------------------- Status ------------------------------------------------------------------------------ -->


<?php
if(isset($_SESSION['admin']) and isset($_SESSION['Account'])){
if(isset($_POST['Account'])){
	$_SESSION['Account'] = $_POST['Account'];
}
$AccountNo=$_SESSION['Account'];
$SQL2 = "select * from status where mobileno='$AccountNo';";
$Result2 = mysqli_query($Connect,$SQL2);
$ResultCheck2 = mysqli_num_rows($Result2);
if($ResultCheck2 == true){
$row2 = mysqli_fetch_assoc($Result2);
$mobileno2 = $row2['mobileno'];
$us1 = $row2['uploadstatus1'];
$us2 = $row2['uploadstatus2'];
$us3 = $row2['uploadstatus3'];
$vs = $row2['verificationstatus'];
$as = $row2['approvalstatus'];


echo "<h1 style='display:inline;'>Document Details</br></h1>";
//unset($_SESSION['Account']);
echo "<b>Govt. Proof:</b> $us1<br><b>Income Proof:</b> $us2<br><b> Fee Structure Proof:</b> $us3<br><b>Verification Status:</b> $vs<br><b>Approval Status:</b> $as<br>";
}
else{
echo "<b style='color:red; font-size:30px;'>***No Bank Account found with the Account Number: ".$_SESSION['Account']."***</b><br>";
//unset($_SESSION['Account']);
}
}else{
echo "<b style='color:red; font-size:30px;'>***Error! Occured.***</b><br>";
}
?>

<!Doctype html>
<head>
</head>
<body>
<form name="f3" action="Method.php" method="POST"> 
<select name='coltype3'>
<option value='empty'>(Select a data to change)</option>
<option value='uploadstatus1'>Govt. Proof Status</option>
<option value='uploadstatus2'>Income Proof Status</option>
<option value='uploadstatus3'>Fee Structuer Status</option>
<option value='verificationstatus'>Verification Status</option>
<option value='approvalstatus'>Approval Status</option>
</select>
<input type="text" name="data3" placeholder="Enter Data">
<button type="submit" name="Submit3" value="status">Submit</button><br>
</form>
<hr>
</body>
</html>
