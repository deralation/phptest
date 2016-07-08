<?php 

require '../../app_config.php';
$gokhan = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME)
 	or die("<p>Error connecting to databases: " . mysqli_error() ."</p>");
 echo "<p>Connected to ".DATABASE_NAME. " Mysql!</p>";

 $result = mysqli_query($gokhan, "SHOW TABLES ;");

 if(!$result){
 	die("<p>Error in listing tables: " .mysqli_error() . "</p>");
 }

 //echo var_dump($result); exit();
 echo "<p>Tables in database: </p>";
 echo "<ul>";

 while($row = mysqli_fetch_row($result)){
 	echo "<li>Table: ". $row[0] . "</li>";
 }
echo "</ul>"
	
?>
