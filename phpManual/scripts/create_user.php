<?php 

	require '../database_connection.php';

	$first_name = trim($_REQUEST['first_name']);
	$last_name = trim($_REQUEST['last_name']);
	$email = trim($_REQUEST['email']);
	$bio = trim($_REQUEST['bio']);
	$facebook_url = str_replace("facebook.org","facebook.com",trim($_REQUEST['facebook_url']));
	$position = strpos($facebook_url,"facebook.com");

	if($position === false){
		$facebook_url = "http://www.facebook.com/".$facebook_url;
	}
	$twitter_handle = trim($_REQUEST["twitter_handle"]);
	$twitter_url = "http://www.twitter.com/";
	$position = strpos($twitter_handle, '@');
	
	if($position === false){
		$twitter_url = $twitter_url.$twitter_handle;
	}else{
		$twitter_url = $twitter_url.substr($twitter_handle,$position + 1);
	}
	
	// Handle User Request

	$insert_sql = "INSERT INTO users (first_name, last_name, email, bio ".", facebook_url, twitter_handle) "."VALUES ('{$first_name}','{$last_name}','{$email}','{$bio}',"."'{$facebook_url}','{$twitter_handle}');";

	// ınsert the user into the database
	
	mysqli_query($gokhan, $insert_sql)
		or die(mysql_error());
	
	// load this ınformation and ready it for display in the html output
	header("Location: show_user.php?user_id=" . mysql_insert_id());
	exit();
?>