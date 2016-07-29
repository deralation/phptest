<?php  

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
?>