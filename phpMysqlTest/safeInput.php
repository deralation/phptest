<?php  
require_once "login.php";
$conn = new mysqli($hn,$un,$pw,$db);

if($conn->connect_error)
	die($conn->connect_error);

$user = mysql_fix_string($conn,$_POST['user']);
$password = mysql_fix_string($conn,$_POST['pass']);

$query = "SELECT * FROM users WHERE user='$user' AND pass='$pass";

?>