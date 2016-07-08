<<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/phpMM.css">
</head>
<body>
	<div id="header"><h1>PHP & MYSQL: Missing Manual</h1></div>
		<div id="example">Example 2-3</div>
			<div id="content">
			<p>Here's a record of everything in the $_REQUEST array:</p>
			<?php
				foreach($_REQUEST as $key => $value) {
					echo "<p>" . $key ." ". $value . "</p>";
				}
			?>
			</div>
	<div id="footer"></div>
</body>
</html>