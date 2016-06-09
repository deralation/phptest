<?php
require 'database_connection.php';

// Get the user ıd of the user to show 
$user_id = $_REQUEST["user_id"];

// Build the Select the statement
$select_query = "SELECT * FROM users WHERE user_id = ".$user_id;

// Run the query
$result = mysqli_query($gokhan, $select_query);

if($result){
	// Get the query result rows using $result
	$row = mysqli_fetch_array($result);

	echo var_dump($result);
	// Break up the row into its different fields and assign to variables
}else{
	die("Error locating user with ID".$user_id);
}

// Assign values to variables

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="header">
		<h1>PHP & MYSQL: The Missing Manual</h1>
	</div>
	<div id="content">
		<div class="user_profile">
			<h1><?php $first_name." ".$last_name ?></h1>
			<p><img src="<?php echo $user_image ?>" class="user_pic"><?php echo $bio ?></p>
			<p class="contact_info">Get in touch with<?php echo $first_name.":" ?></p>
			<ul>
				<li>...by emailing them at <a href="<?php echo $email ?>"><?php echo $email ?></a></li>
				<li>...by emailing them at <a href="<?php echo $facebook_url ?>">checking them out on facebook</a></li>
				<li>...by emailing them at <a href="<?php echo $twitter_url ?>">following them on twitter</a></li>
			</ul>
		</div>
	</div>
</body>
</html>