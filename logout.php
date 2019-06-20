<?php
session_start();
if(isset($_SESSION["name"]) or isset($_SESSION["admin"]))
{
unset($_SESSION["name"]);
unset($_SESSION["mobile"]);
unset($_SESSION["admin"]);
session_destroy();
echo "Logged out Successfully...!";
header('Location:index.php');
}
else
{
echo "Session timeout";
}
?>