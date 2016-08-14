<?php  
echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="calc.php" method="post">
	<pre>
		Loan Amount <input type="text" name="principle">
		Monthly Amount <input type="text" name="monthly">
		Numbers of Years <input type="text" name="years" value="25">
		Interest Rate <input type="text" name="rate" value="6">
		Options <input type="checkbox" name="name" value="value">	
		Default Text<textarea name='name' cols='width' rows='height' wrap='type'>Default Text</textarea>
		<input type="submit">
	</pre>

</form>
</body>
</html>
_END;
?>
