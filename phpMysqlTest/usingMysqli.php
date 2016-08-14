<?php  
require_once "login.php";
$link = mysqli_connect($hn,$un,$pw,$db);

if(mysqli_connect_errno())
	die(mysqli_connect_error());

$result = mysqli_query($link,"SELECT * FROM classics");
$rows = mysqli_fetch_array($result,MYSQLI_NUM);

$insertID = mysqli_insert_id($result);
$escaped = mysqli_real_escape_string($link,$val);

$stmt = mysqli_prepare($link,'INSERT INTO classics VALUES(?,?,?,?,?)');

mysqli_stmt_bind_param($stmt,'sssss',$author,$title,$category,$year,$isbn);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($link);

echo '<pre>';
var_dump($rows); exit();
?>