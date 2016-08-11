<?php  
require_once "login.php";
$conn = new mysqli($hn,$un,$pw,$db);

if($conn->connect_error)
	die($conn->connect_error);

$query = "INSERT INTO cats VALUES(NULL,'Lion','leo',4)";
$query = "INSERT INTO cats VALUES(NULL,'Cougar','Growler',4)";
$query = "INSERT INTO cats VALUES(NULL,'Cheetah','Charly',4)";
$result = $conn->query($query);
if(!$result) die("DATABASE failed:".$conn->error);

?>