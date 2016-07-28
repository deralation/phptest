<?php 
$products  = array(
	'paper' => array(
		'copier' => "Copier & Multipurpose",
		'inkjet' => "Inkjet Printer",
		'laser'	 => "Laser Printer",
		'photo'	 => "Photographic Paper"
		),
	'pens' => array(
		'ball' => "Ball Pointer",
		'hilite' => "Highlighters",
		'marker' => "Markers"
		),
	'misc' => array(
		'tape' => "Sticky Tape",
		'glue' => "Adhesives",
		'clips' => "Paperclips",
		),
	);

	echo '<pre>';

	foreach ($products as $section => $items) {
		foreach ($items as $key => $value) {
			echo "$section:\t$key\t($value)<br>";
		}
	}
	echo '<pre>';

	echo $products['misc']['glue'];
?>
<br>
<?php  
$chessboard = array(
	array('r','n','b','q','k','b','n','r'),
	array('p','p','p','p','p','p','p','p'),
	array('','','','','','','',''),
	array('','','','','','','',''),
	array('','','','','','','',''),
	array('','','','','','','',''),
	array('P','P','P','P','P','P','P','P'),
	array('R','N','B','Q','K','B','N','R'),
);
	echo "<pre>";

	foreach ($chessboard as $row) {
		foreach ($row as $piece)
			echo $piece;
			echo "<br>";
	}
	echo '<pre>';
	echo $chessboard[7][3]
?>
<br>
<?php  
$fred = array("a","b","c","d","e","f","g","k");
echo (is_array($fred))? "Is an array":"Is not an array";
echo '<pre>';
echo count($fred);
echo count($fred, 1);
print sort($fred);
print sort($fred, SORT_NUMERIC);
print sort($fred, SORT_STRING);	 
print rsort($fred, SORT_NUMERIC);
print rsort($fred, SORT_STRING);
?>
<br>
<?php  
$cards = array("1","2","3","4","5");
var_dump(shuffle($cards));
?>
<br>
<?php  
$temp = explode(" ","This is a sentence with seven words");
print_r($temp);
?>
<br>
<?php  
$temp = explode('***','A***sentence***with***asteriks');
print_r($temp);
?>