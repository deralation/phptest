<?php 
	require '../../database_connection.php';

	$query_text = $_REQUEST["query"];

	$result = mysqli_query($gokhan, $query_text);
	
	$return_rows = true;
	if(preg_match("/^\s*(CREATE|INSERT|UPDATE|DELETE|DROP)/i",$query_text)){
		$return_rows = false;
	}
	/*$return_rows = false;
	$uppercase_query_text = trim(strtoupper($query_text));
	$location = strpos($uppercase_query_text, "CREATE");
	if($location === false){
		$location = strpos($uppercase_query_text, "INSERT");
		if($location === false){
			$location = strpos($uppercase_query_text, "UPDATE");
			if($location === false){
				$location = strpos($uppercase_query_text,"DELETE");
				if($location === false){
					$location = strpos($uppercase_query_text, "DROP");
					if($location === false){
						$return_rows = true;
					}
				}
			}
		}
	}*/
	if($return_rows){
		echo "<p>Results from query: </p>";
		echo "<ul>";
		while($row = fetch_assoc($result)){
			echo "<li>".$row[0]."</li>";
		}
		echo "</ul>";	
	}else{
		echo "<p>Your query was processed succesfully.</p>";
		echo "<p>".$query_text."</p>";
	}

 ?>