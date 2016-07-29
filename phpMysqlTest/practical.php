<?php // exec.php

$cmd = "ls";  

exec(escapeshellcmd($cmd), $output, $status);

if($status){
	echo "Exec command failed";
}else{
	echo "<pre>";
	foreach ($output as $line) {
		echo htmlspecialchars("$line\n");
		echo "</pre>";
	}
}



$r = 44;
$g = 70;
$b = 20;

printf("There are %e items in your basket",3);
echo '<br>';
printf("My name is %s. I'm %d years old,which is %X in hexadecimal",'Simon',33,33);
echo '<br>';
printf("<span style='color:#%X%X%X'>Hello</span>",65,127,245);
echo '<br>';
printf("<span style='color:#%X%X%X'>Hello</span>",$r-20,$g-20,$b-20);
?>
<br>
<?php  
printf("The result is: $%.2f",123.42/12);	
?>
<?php  
echo "<pre>"; 
printf("The result is $%15f\n",123.42/12); // Pad to 15 spaces
echo "<br>";
printf("The result is $%015f\n",123.42/12); // Pad to 15 spaces, fill with zeros
echo "<br>";
printf("The result is $%15.2f\n",123.42/12); // Pad to 15 spaces, 2 decimal places precision
echo "<br>";
printf("The result is $%015.2f\n",123.42/12); // Pad to 15 spaces, 2 decimal places precision, fill with zeros
echo "<br>";
printf("The result is $%'#15.2f\n",123.42/12); // Pad to 15 spaces, 2 decimal places precision, fill with #
?>
<br>
<?php  
echo "String Padding";

echo "<pre>";

$h = "Rasmus";

printf("[%s]\n", $h); // Standar string output

printf("[%12s]\n", $h); // Right justify with spaces to width 12

printf("[%-12s]\n", $h); // Zero padding

printf("[%-12s]\n\n", $h); // Use the custom padding

$d = "Rasmus Lerdorf"; // Creator of PHP

printf("[%12.8s]\n", $d); // Right justify, cutoff of 8 characters
printf("[%-12.12s]\n", $d); // Right justify, cutoff of 12 characters

printf("[%-'@12.10s]\n", $d); // Right justify, cutoff of 12 characters
?>
<br>
<?php  
echo "Sprintf";

echo "<pre>";
$hexstring = sprintf("%X%X%X",65,127,245);

$out = sprintf("The result is : $%.2f",123.42/12);
echo $out;
?>
<br>
<?php  
echo "Date time function";
echo "<pre>";
echo time() + 7*24*60*60;
echo mktime(0,0,0,1,1,2000);	
echo date("1 F jS, Y-g:ia",time());
?>
<br>
<?php  
echo "Date Constants";
echo "<pre>";

echo date(DATE_RSS);
echo "<br>";
echo date(DATE_ATOM);
echo "<br>";
echo date(DATE_COOKIE);
echo "<br>";
echo date(DATE_W3C);
?>
<br>
<?php  
echo "Using CheckDate";
echo "<pre>";
$month = 9;
$day = 31;
$year = 2018;

$gun = 31;
$ay = 2;
$yil = 2016;
$dun = 28;
$yarin = 30;

function getValidDate($month, $day, $year){
	if(checkdate($month, $day, $year)) echo "Day is valid";
	else echo "Date is invalid";	
}
echo getValidDate($month, $day, $year);
echo "<br>";
echo getValidDate($ay, $gun, $yil);
echo "<br>";
echo getValidDate($ay, $dun, $yil);
echo "<br>";
echo getValidDate($ay, $yarin, $yil);
?>
<br>
<?php  
echo "File Handling";
echo "<pre>";
echo "Checking file exists";
if(file_exists("testfile.txt"))
	echo "Files exists";
?>
<br>
<?php  
$fh = fopen("testfile.txt","w") or die("Failed to create file");

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written succesfully";
echo '<pre>';
echo file_get_contents('testfile.txt');
?>
<br>
<?php  
echo "Reading From files";
echo '<pre>';
$fg = fopen("testfile.txt",'r') or die("File does not exist or you lack permission to open it");

$line = fgets($fg);
fclose($fg);
echo $line;
echo file_get_contents('testfile.txt');

$fh = fopen("testfile.txt",'r') or die("File does not exist or you lack permission to open it");
$message = fread($fh,3);
fclose($fh);
echo $message;
echo file_get_contents('testfile.txt');
?>
<br>
<?php 
echo "Copy file";
echo '<pre>';

copy('testfile.txt','testfile2.txt') or die("Could not copy file");
echo "File succesfully copied to 'testfile2.txt'";
echo "<pre>";
echo file_get_contents('testfile.txt');
echo "<pre>";
echo file_get_contents('testfile2.txt');
echo "<pre>";
if(!copy('testfile.txt','testfile2.txt')) echo "Could not copy file";
else echo "File succesfully copied to testfile2.txt";
?>
<br>
<?php  
echo "Moving a file";
echo '<pre>';

if(!rename('testfile2.txt','testfile2.new'))
	echo "Could not rename file";
else echo "File succesfully renamed to 'testfile2.new";
?>
<br>
<?php  
echo 'deleting a file';
echo "<pre>";

if(!unlink("testfile2.new"))
	echo "Could not delete file";
else 
	echo "File 'testfile2.new' succesfully deleted";
echo "<pre>";
echo file_get_contents('testfile.txt');
?>
<br>
<?php  
echo "Updating File";
echo "<pre>";

$fp = fopen("testfile.txt",'r+')or die("Failed to open file");
$p  = fgets($fp);

fseek($fp,0,SEEK_END);
fwrite($fp,"$p") or die("Could not write to file");
fclose($fp);
echo "<pre>";
echo "File 'testfile.txt' succesfully updated" ;
echo "<pre>";
echo file_get_contents('testfile.txt');
?>
<br>
<?php  
echo "Locking files for multiple accesses";
echo "<pre>";

echo "Updating a file with file locking";
echo '<pre>';
$fs = fopen("testfile.txt",'r+')or die("Failed to open file");
$s = fgets($fs);

if(flock($fs, LOCK_EX)){
	fseek($fs,0,SEEK_END);
	fwrite($fs,"$s") or die("Could not write to file");
	flock($fs, LOCK_UN);
}

fclose($fs);
echo "File 'testfile.txt' succesfully updated";
echo "<pre>";
echo file_get_contents('testfile.txt');
?>
<br>
<?php 
echo file_get_contents('testfile.txt');
echo "<pre>";
?>
<?php  
echo "Grabbing home page the O'reilly home page";
//echo file_get_contents("https://oreilly.com");
?>
<br>
<?php  
echo "Uploading files";
echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM UPLOAD</title>
</head>
<body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
select file:<input type='file' name='filename' size:'10'>
<input type='submit' value='Upload'>
</form>
_END;

if($_FILES)
{
	$name = $_FILES['filename']['name'];

	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo "Upload image'$name'<br><img src='$name'>";

	var_dump($_FILES);
}
echo "</body></html>";
?>
<br>
<?php  
echo "Validation";
echo '<pre>';
echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM UPLOAD</title>
</head>
<body>
<form method='post' action='upload2.php' enctype='multipart/form-data'>
select a Jpeg, GIF, PNG or TIF :<input type='file' name='filename' size:'10'>
<input type='submit' value='Upload'>
</form>
_END;

if($_FILES)
{
	$name = $_FILES['filename']['name'];

	switch ($_FILES['filename']['type']) 
	{
		case 'image/jpeg': $ext = 'jpg';
			break;
		case 'image/gif': $ext = 'gif';
			break;
		case 'image/png': $ext = 'png';
			break;
		case 'image/tiff': $ext = 'tif';
			break;
		default: $ext = '';
			break;
	}
	if($ext)
	{
		$n = "image.$ext";
		move_uploaded_file($_FILES['filename']['tmp_name'], $n);
		echo "Upload image'$name'<br><img src='$n'>";
		echo "<img src='$n'>";
	}
	else echo "$name is not am accepted image file";
}
else echo "No image has been uploaded";
echo "</body></html>";


//$name = preg_replace("/[^A-Za-z0-9.]/", "",$name);

//$name = strtolower(ereg_replace("[Â-Za-z0-9.]", "",$name));
?>
<br>
<?php  
echo "System Calls";




?>