<?php 

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);
?>
<?php  

$mal[0] = "Lak";
$mal[1] = "Lok";
$mal[2] = "Laser";
$mal[3] = "Photo";

print_r($mal);

?>
<?php  

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for ($j=0; $j < 4; $j++) { 
	echo "$j: $paper[$j]<br>";
}
?>
<?php  
$paper["copier"] = "Copier & Multipurpose";
$paper["inkjet"] = "Inkjet Printer";
$paper["laser"] = "Laser Printer";
$paper["photo"] = "Photographic paper"; 

echo $paper["laser"]."<br>";
?>
<?php 
$html["title"] = "My web page";
$html["body"] = "...body of web page...";
?>
<?php 
$p1 = array("Copier","Inkjet","Laser","Photo");

echo "p1 element: ".$p1[2]."<br>";

$p2 = array('copier' => "Copier & Multipurpose",'inkjet'=>"Inkjet Printer",'laser'=>"Laser Printer",'photo'=>"Photographic Paper");

echo "p2 element: ".$p2['inkjet']."<br>";
?>
<?php  
$paper = array("Copier","Inkjet","Laser","Photo");
$j = 0;

foreach ($paper as $item) {
	echo "$j: $item<br>";
	++$j;
}
?>
<?php 
$paper = array('copier' => "Copier & Multipurpose",
			   'inkjet' => "Inkjet Printer",
			   'laser'	=> "Laser Printer",
			   'photo'	=> "Photographic Paper"
	);
	foreach ($paper as $item => $description) {
		echo "$item: $description<br>";
	}

	while(list($item, $description)= each($paper))
		echo "$item: $description<br>";
?>
<?php 
list($a, $b) = array("Alice","Bob");
echo "a=$a b=$b";
?>