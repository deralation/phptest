<?php 
if(isset($_POST["ice"])){
	$ice = $_POST["ice"];
	foreach ($ice as $item) {
		echo "$item<br>";
	}
}else{
	$ice = "No more ice";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form aciton="option.php" method="post">
<pre>
	Vanilla<input type="checkbox" name="ice[]" value="Vanilla">
	Chocolate<input type="checkbox" name="ice[]" value="Chocolate">
	Strawberry<input type="checkbox" name="ice[]" value="Strawberry">
	8am-Noon<input type="radio" name="time" value="1">
	Noon-4pm<input type="radio" name="time" value="2" checked="checked">
	4pm-8pm<input type="radio" name="time" value="3">
	Vegatables
	<select name="veg" size="5" multiple="multiple">
		<option value="Peas" selected="selected">Peas</option>
		<option value="Beans">Beans</option>
		<option value="Carrots">Carrots</option>
		<option value="Cabbages">Cabbages</option>
		<option value="Broccoli">Broccoli</option>
	</select>
	<input type="submit">
</pre>
</form>
</body>
</html>