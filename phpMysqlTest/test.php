<?php

include "library.php";
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
    <br>
    <?php 
    $day_number = 360;
    $days_to_new_year = 366-$day_number;

    if($days_to_new_year<30){
    	echo "Not long now till new year";
    }
    ?>
    <br>
    <?php 
    $month = "march";

    if($month == "march") echo "it is spring time";
     ?>
     <br>
     <?php 
     $a = "10000";
     $b = "+10000";

     if($a==$b) echo "1";
     if($a===$b) echo "2";

     if($a != $b) echo "1";
     if($a !== $b) echo "2";
     ?>
     <br>
     <?php 
     $a = 2; $b = 3;
     if($a>$b) echo "$a is greater than $b<br>";
     if($a<$b) echo "$a is less than $b<br>";
     if($a >= $b) echo "$a is greater than or equal to $b<br>";
     if($a <= $b) echo "$a is less than or equal to $b<br>";
      ?>
      <br>
      <?php 
      $a = 1;
      $b = 0;

      echo ($a AND $b). "<br>";
      echo ($a or $b). "<br>";
      echo ($a xor $b). "<br>";
      echo !$a. "<br>";
       ?>
       <br>
       <?php 

       //$gn = getnext();
       $finished = 0;

       //if($finished == 1 OR $gn == 1) exit;
        ?>
        <br>
        <?php
        $page = "Home";

        switch($page){
        	default:
        		echo "Unrecognized selection";
        		break;
        	case "Home":
        		echo "You slected Home";
        		break;
        	case "About":
        		echo "You selected About";
        		break;
        	case "News":
        		echo "You selected News";
        		break;
        	case "Login":
        		echo "You selected Login";
        		break;
        	case "Links":
        		echo "You selected Links";
        		break;
        }
        ?>
        <br>
        <?php
        	$fuel = 0; 
        	echo $fuel < 1 ? "Fill tank now": "There is enough fuel";
        ?>
        <br>
        <?php 
        	$enough = $fuel <= 1 ? FALSE : TRUE;

        	$saved = 0;
        	$new = 5;
        	$saved = $saved >= $new ? $saved : 
        	$new;
        	echo $saved;
        ?>
        <br>
        <?php 
        
        $count = 1;
        while ($count<=12){
        	echo "$count there is enough fuel<br>";
        	++$count;
        }		
         ?>
         <br>

         <?php 
         $count = 1;
         do
         echo "$count time<br>";
         while(++$count <= 12);
          ?>
          <br>
          <?php 
          for($count=1; $count<=12; ++$count)
          	echo "$count times<br>";
           ?>
           <br>
           <?php 
           for($i=1, $j=1; $i+$j<10 ; $i++, $j++){
           	echo $i;
           }
            ?>
    <br>
    <?php 
    $fb = fopen("text.txt",'wb');

    for ($j=0; $j < 100 ; $j++) { 
    	$written  = fwrite($fb, "data");
    	if(!$written) break 2;
    }
    fclose($fb);
    ?>
    <br>
    
    <?php 
    $j = 10;
    while($j > -10){
      $j--;
      if($j == 0) continue;
      echo (10/$j)."<br>";
    }
    ?>
    <?php 
    $a = 56;
    $b = 12;
    $c = (int)($a / $b) ;

    echo $c ;

    print("print is a pseudo function");

    ?>
    <br>
    <?php 
    echo strrev(".dlow olleh");  // Reserve String
    echo str_repeat("Hip",2);    // Repeat String
    echo strtoupper("hooray!");  // String to uppercase
    echo $lowercase = strtolower("aNy of # letters and Punctuation you want"); // lowercase all letter
    echo $ucfixed =  ucfirst($lowercase);
    print(abs(5-8)); // convert the result to a string and output it the using print function
     ?>
     <br>
     <?php 

     echo fix_names("WILLIAM","henry","gatES");

    // echo $a1." ".$a2." ".$a3."<br>";

     //25fix_names($a1,$a2,$a3);
     //echo $a1." ".$a2." ".$a3;

     function fix_names($n1, $n2, $n3){
      $n1 = ucfirst(strtolower($n1));
      $n2 = ucfirst(strtolower($n2));
      $n3 = ucfirst(strtolower($n3));
        return $n1." ".$n2." ".$n3;
     }

      ?>
      <br>
      
      <?php 
      $a1 = "WILLIAM";
      $a2 = "henry";
      $a3 = "gatES";

      echo $a1." ".$a2." ".$a3."<br>";
      
      stable_names();
      echo $a1." ".$a2." ".$a3;

      function stable_names(){
        global $a1; 
          $a1 = ucfirst(strtolower($a1));
        global $a2; 
          $a2 = ucfirst(strtolower($a2));
        global $a3; 
          $a3 = ucfirst(strtolower($a3));
      }
      ?>
      <br>
      <?php 
      if(function_exists("array_combine")){
        echo "function exists";
      }else{
        echo "function is does not exits-better write your own";
       }
       ?>