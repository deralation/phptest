<?php 
	$firstname = $_REQUEST["first_name"];
	$lastname = $_REQUEST["last_name"];
	$email = $_REQUEST["email"];
	$facebook = $_REQUEST["facebook_url"];
	$position = strpos($facebook, "facebook.com");
	/*if($position==false) {
		$facebook = "https://www.facebook.com/". $facebook;
	}*/

	if($position===false){
		$facebook = "http://www.facebook.com/".$facebook;
	}
	//echo var_dump($position); exit();
	$twitter = $_REQUEST["twitter_handle"];
	$twitter_url = "http://www.twitter.com/";
	$position = strpos($twitter, '@');
	if($position===false){
		$twitter = $twitter_url . $twitter;
	}else {
		//Do something to remove the @ from the twitter handle
		$twitter_url = $twitter_url . substr($twitter, $position + 1);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div id="header"><h1>PHP & MYSQL: Missin Manual</h1></div>
	<div id="example">Example 3-1</div>
	<div id="content">
		<p>Here is a record of what information you submitted:</p>
		<p>Full Name: <?php echo $firstname." ".$lastname; ?><br />
			Email: <?php echo $email ; ?><br />
			<a href="<?php echo $facebook ; ?>">Check your Facebook Page</a><br />
			<a href="<?php echo $twitter_url ;?>">Check your Twitter Account</a><br />
			</p>
	</div>

<div id="footer"></div>


</body>
</html>