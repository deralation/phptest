<?php 
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
	echo "Welcome user: ".$_SERVER['PHP_AUTH_USER']."Password: ".$_SERVER[];
}else{
	header('www-authenticate: Basic realm="Restricted Section"');
	header('HTTP/1.0 401 Unauthorized');
	die('Please Enter Your username and password');
}







?>