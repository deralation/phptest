<?php 
$oxo = array(array('x',' ','o'),array('o','o','x'),array('x','o',' '));

echo $oxo[1][2];
?>
<br/>
<?php
echo 6+10;
?>

<?php 
$ammonia = false;
$bealch = true;

$ingredients = $ammonia xor $bealch;

$x = 20;
--$x;
++$x;

if($x-- == 19){
	print $x;
}else{
	print 'no';
};

$author = "steve palmer";

echo "develoepr, developers, develoeprs -$author.";
?>
<br />
<?php 

$b = 2;
echo "this is the line ".__LINE__." of file ".__FILE__;
$b ? print "TRUE" : print "FALSE";

$temp = "the date is ";
echo longdate($temp,time());

function longdate($text, $timestamp){
	
	return $text . date("1 F js Y",$timestamp);
}

global $is_logged_in;
?>
<br />

<?php 
function test(){
	static $count = 0;
	echo $count;
	$count++;
}

echo test();
 ?>

<br/>
<?php 
static $int = 0;


//$came_from = htmlentities($_SERVER['http_redirect']);

 ?>
 <br>
 <?php 

$x =  4;

$y = 3 * (abs(2*$x) + 4);

echo $y;
  ?>
  <br>
  <?php 
  echo "a:[".(20>9)."]<br>";
  echo "b:[".(5==6)."]<br>";
  echo "c:[".(1==0)."]<br>";
  echo "d:[".(1==1)."]<br>";
   ?>
   <br>
  <?php 
  echo "a:[".TRUE."]<br>";
  echo "b:[".FALSE."]<br>";
   ?>
   <br>
   <?php 
   $myname ="Brian";
   $myage = 37;

   echo "a: ". 73 . "<br>";
   echo "b: ". "Hello" . "<br>";
   echo "c: ". FALSE . "<br>";
   echo "d: ". $myname . "<br>";
   echo "e: ". $myage . "<br>";



    ?>