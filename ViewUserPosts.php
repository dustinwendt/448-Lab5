<html>
<head><title>View User Posts</title></head>

<body>
	<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$mysqli = new mysqli("mysql.eecs.ku.edu", "dwendt", "ExplorerOnFire", "dwendt");

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$user_id = $_POST['user_id'];

	$query = "SELECT content,post_id FROM Posts WHERE author_id = '$user_id'";

	if($result = $mysqli->query($query))
	{
		echo "Showing posts for user: " . $user_id;
		echo "<table border=1>";
		echo "<tr><th>Post Id</th><th>Content</th></tr>";
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>". $row['post_id'] ."</td>";
			echo "<td>" . $row["content"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		$result->free();
	}

	$mysqli->close();

	 ?>
</body>
</html>
