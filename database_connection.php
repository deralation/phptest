<?php 
	require 'app_config.php';

	$gokhan = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME)
		or die("<p>Error connecting to database: ". mysqli_error()."</p>");
	echo "<p>Connected to Mysql!</p>";
	
 ?>