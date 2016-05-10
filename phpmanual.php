<?php /*
echo "Hello there. So I hear you're learning to be a PHP programmer!\n";
echo "Why don't you type in your name for me:\n";
$name = trim(fgets(STDIN));

echo "\nThanks, " . $name . ", it's really nice to meet you.\n\n";

	$numberSix = 6;
	$thisIsMyName = "Breet";
	$carMake = "Honda";

	$firstname = $_REQUEST("firstname");
	$lastname = $_REQUEST("lastname");
	$email = $_REQUEST("email");
	$facebookurl = $_REQUEST("facebook_url");
	$twitter = $_REQUEST("twwitter");
*/
?>

<?php 
	$file_cabinet["firstname"] = "Derek";
	$file_cabinet["lastname"] = "Trucks";
	$file_cabinet["email"] = "derek@derektrucks.com";
	$file_cabinet["facebook"] = "http://www.facebook.com/DerekTrucks";
	$file_cabinet["twitter"] = "@derekandsusan";

	$firstname = $file_cabinet["firstname"] ;
	$lastname = $file_cabinet["lastname"] ;
	$email = $file_cabinet["email"] ;
	$facebook = $file_cabinet["facebook"];
	$twitter = $file_cabinet["twitter"];

	echo $firstname . " " . $lastname;
	echo "\nEmail: " . $email;
	echo "\nFacebookURL: " . $facebook;
	echo "\nTwiiter: " . $twitter;
?>