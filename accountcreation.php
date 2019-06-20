<?php 
include_once 'header.php';
?>
<?php
$dbServerName="localhost";
$dbUserName="admin";
$dbPassword="Bunny8520";
$dbName="loan";
$Connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

if(isset($_POST['Continue'])){
	$email=mysqli_real_escape_string($Connect,$_POST['email']);
	$password1=md5(mysqli_real_escape_string($Connect,$_POST['password1']));
	$password2=md5(mysqli_real_escape_string($Connect,$_POST['password2']));
	if($password1==$password2){
	$name=mysqli_real_escape_string($Connect,$_POST['name']);
	$fname=mysqli_real_escape_string($Connect,$_POST['fname']);
	$dob=mysqli_real_escape_string($Connect,$_POST['dob']);
	$address=mysqli_real_escape_string($Connect,$_POST['address']);
	$permanentaddress=mysqli_real_escape_string($Connect,$_POST['permanentaddress']);
	$mobno=mysqli_real_escape_string($Connect,$_POST['mobno']);
	$city=mysqli_real_escape_string($Connect,$_POST['city']);
	$state=mysqli_real_escape_string($Connect,$_POST['state']);
$sql="select * from accountcreation where mobno='$mobno';";
$result=mysqli_query($Connect,$sql);
$resultcheck=mysqli_fetch_assoc($result);
if(!$resultcheck){
$sql1="insert into accountcreation(email,password,name,fname,dob,address,permanentaddress,mobno,city,state)
values('$email','$password1','$name','$fname','$dob','$address','$permanentaddress','$mobno','$city','$state');";
mysqli_query($Connect,$sql1);

$Balance="10000";
$InterestRate="0";
$Time="0";
$ApprovedLoanAmount="0";
$GivenLoanAmount="0";
$InterestAmount="0";

$sql2="insert into bankaccount(mobileno,Balance,InterestRate,Time,ApprovedLoanAmount,GivenLoanAmount,InterestAmount)
	values('$mobno','$Balance','$InterestRate','$Time','$ApprovedLoanAmount','$GivenLoanAmount','$InterestAmount');";
mysqli_query($Connect,$sql2);

$b="false";
$x="processing";
$y="verification pending";

$sql3="insert into status(mobileno,uploadstatus1,uploadstatus2,uploadstatus3,verificationstatus,approvalstatus)
	values('$mobno','$b','$b','$b','$x','$y');";
mysqli_query($Connect,$sql3);
	echo "$email<br>";
	echo "$name<br>";
	echo "$fname<br>";
	echo "$dob<br>";	
	echo "$address<br>";	
	echo "$permanentaddress<br>";	
	echo "$mobno<br>";	
	echo "$city<br>";
	echo "$state<br>";
	$AccountNumber = $mobno;
	header('Location:index.php');
}
else{
	echo'<h3 style="color:red;">***Mobile Number Used:***</h3><a href="accountcreationhtml.php">Click Here for Previous Page</a>';
	
}
}else{
	echo'<h3 style="color:red;">***Passwords Mismatch***</h3><a href="accountcreationhtml.php">Click Here for Previous Page</a>';
}
}
?>

