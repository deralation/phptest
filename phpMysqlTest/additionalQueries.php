<?php  
require_once "login.php";
$conn = new mysqli($hn,$un,$pw,$db);

if($conn->connect_error)
	die($conn->connect_error);

$query = "SELECT * FROM customer";
$result = $conn->query($query);

if(!$result) die("Database access failed: ".$conn->error);

$rows = $result->num_rows;

for ($j=0; $j < $rows ; $j++) { 
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);

	echo "$row[0] purchased ISBN $row[1]:<br>";

	$subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";

	$subresult = $conn->query($subquery);

	if(!$subquery) die("DATABASE access failed:".$conn->error);

	$subrow = $subresult->fetch_array(MYSQLI_NUM);

	echo " '$subrow[1]' by '$subrow[0]'<br>";
}


function mysql_fix_string($conn,$string){
	if(get_magic_quotes_gpc())
		$string = stripslashes($string);
	return $conn->real_escape_string($string);
}

?>