<?php  
if(isset($_POST["name"])){
	$name = $_POST["name"];
}else{
	$name = "(Not entered)";
}

echo <<<_END
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="formtest2.php" method="post">
What is your name?
<input type="text" name="name"></input>
<input type="submit">
</form>
</body>
</html>
_END;


?>