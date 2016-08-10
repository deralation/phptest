<?php  
require_once "login.php";
$conn = new mysqli($hn,$un,$pw,$db);

if($conn->connect_error)
die($conn->connect_error);

$query = "SELECT * FROM classics";
$result = $conn->query($query);
if(!$result) die($conn->connect_error);


$rows = $result->num_rows;

for ($j=0; $j < $rows ; $j++) { 
	$result->data_seek($j);
	echo 'Author: ' .$result->fetch_assoc()["author"].'<br>';
	$result->data_seek($j);
	echo 'Title: ' .$result->fetch_assoc()["title"].'<br>';
	$result->data_seek($j);
	echo 'Category: ' .$result->fetch_assoc()["category"].'<br>';
	$result->data_seek($j);
	echo 'Year: ' .$result->fetch_assoc()["year"].'<br>';
	$result->data_seek($j);
	echo 'ISBN: ' .$result->fetch_assoc()["isbn"].'<br>';
}

$result->close();
$conn->close();

/*function mysql_fatal_error($msg){
	$msg2 = mysql_error();
	echo <<<_END
	We are sorry, but it was not possible to complete requested task. The error message we got was:
	<p>$msg: $msg2</p>
	Please click the back button on your browser and try again. If you are still having problems, please 
	<a href="mailto:admin@server.com">email our administrator</a>. Thank you.
	_END;
}*/


?>