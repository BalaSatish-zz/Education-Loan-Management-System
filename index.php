<?php 
include_once 'header.php';
?>
<html>
<head>
<title>Education Loan Management System</title>
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />

<style>
#example1 {
    border: 5px double black;
    padding: 20px;
    background: url(paper.gif);
    background-repeat: no-repeat;
    background-origin: padding-box;
}

#example2 {
    border: 2px double black;
    padding: 10px;
    background: url(paper.gif);
    background-repeat: no-repeat;
    background-origin: border-box;
}

#example3 {
    border: 2px double black;
    padding: 10px;
    background: url(paper.gif);
    background-repeat: no-repeat;
    background-origin: content-box;
}
a:link {
    
    text-decoration: none;
}
a:visited {
    
    text-decoration: none;
}

a:hover{
    
text-decoration: underline;
}
a:active {
    
text-decoration: underline;
}
</style>
</head>
<body>
<div id="main">
<div id="header">
<div id="logo">
<div id="logo_text">
<!-- class="logo_colour", allows you to change the colour of the text -->
</div>
</div>
<div id="menubar">
<ul id="menu">
<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
<?php
session_start();
if(isset($_SESSION["admin"])){
echo "Hello  Admin <?php";
echo "?><li><a href='Admin/Manage.php'>Manage Accounts</a></li><?php";
echo "?><li><a href='Admin/SRI.php'>Start Accepting Payments</a></li><?php";
echo "?><li><a href='logout.php'>Logout</a></li><?php";
}
else if(isset($_SESSION["name"]))
{
echo "Hello ".$_SESSION['name']."<?php";
echo "?><li><a href='Bankinghtml.php'>Banking</a></li><?php";
echo "?><li><a href='uploadhtml.php'>Apply For Loan</a></li><?php";
echo "?><li><a href='Loan/Loanhtml.php'>Loan Details</a></li><?php";
echo "?><li><a href='Loan/PayInterest.php'>Pay Interest</a></li><?php";
echo "?><li><a href='logout.php'>Logout</a></li><?php";
}
else{
echo "<li><a href='accountcreationhtml.php'>Register</a></li><?php";
echo "?><li><a href='loginhtml.php'>Login</a></li><?php";
}
?>
</ul>
</div>
</div>
<div id="site_content">
<div id="content1">
<h1>EDUCATION LOAN MANAGEMENT SYSTEM</h1>
<div id="example1">
<table border=0><tr><td>The loans which are given to students to pursue
studies beyond class XII are called education loan. Any
student who has the required academic qualification but
cannot pursue further studies due to financial constraints
can take this loan. Though theoretically available for all
higher studies, most education loans are given for
management degrees or advanced technological degrees.
Banks generally do not give loans to study Arts. It depends
on the discretion of the bank who often considers the
income of the parents to give loans for studying subjects
where it feels the prospect of income is less. Education
loans were first started by SBI. Since then, many other
banks are also offering such loans. The students need to be
within 30 years of age in order to qualify for an education loan.<br/>
</div>
<h2> THINGS TO KNOW BEFORE APPLYING FOR EDUCATION LOAN:</h2>
<div id="example2">
The student can apply for education loan in following cases:<br/>
1.The student needs to apply for full time course. Most
banks do not provide loans for part time or distance
education courses or correspondence courses. For these,
the student will need to consult the local banks.<br/>
2.Graduate or post graduate courses in medicine,
technology, engineering, management, architecture, pure
and applied sciences, mathematics, statistics etc.<br/>
3. The student can pursue this course in India or abroad.<br/>
4. The student should also know that educational loans are
tax deductible. When it comes to repayment, make sure of
the tax angle.<br/>
</div>
<h2>ELGIBILITY OF EDUCATION LOAN:</h2>
<div id="example3">
The common criteria for eligibility are:<br/>
1. The student must be citizen of India.<br/>
2. The student must have obtained a specified amount of
marks. He /She should have consistently high
academic records.<br/>
3. The student should not be older than 30 years though
some banks impose a limit of 28 years.<br/>
4. He /She must be doing the course from a recognized
institution.<br/>
5. The student must already be in possession of the letter
of admission.<br/>
6. Student's parent or co-applicant should have enough
income or there should be sufficient family assets.<br/>
</div>
</td></tr></table>
</div>
</div>
</body>
</html>
