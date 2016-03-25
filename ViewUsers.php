<html>
<head><title>View Users</title></head>

<body>
	<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "dwendt", "ExplorerOnFire", "dwendt");

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	$query = "SELECT user_id FROM Users";

	if($result = $mysqli->query($query))
	{
		echo "<table border=1>";
		$userCount = 1;
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$userCount."</td><td>";
			echo $row["user_id"];
			echo "</td></tr>";
			$userCount++;
		}
		echo "</table>";

		$result->free();
	}

	$mysqli->close();

	 ?>
</body>
</html>
