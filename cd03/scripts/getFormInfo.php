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
		<p>First Name: <?php $_REQUEST['first_name']; ?><br />
			Last Name: <?php echo $_REQUEST['last_name']; ?><br />
			Email: <?php echo $_REQUEST['email']; ?><br />
			Facebook URL: <?php echo $_REQUEST['facebook_url']; ?><br />
			Twitter: <?php echo $_REQUEST['twitter_handle']; ?><br />
			</p>
	</div>

<div id="footer"></div>


</body>
</html>