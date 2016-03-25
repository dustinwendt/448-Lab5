<html>
<head><title>Create Posts</title></head>
<body>
	<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu","dwendt","ExplorerOnFire","dwendt");

	/* check connection */
	if($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
   		exit();
	}

	$user_id = $_POST["user_id"];
	$content = $_POST["content"];

	$query = "SELECT user_id FROM Users WHERE user_id = '$user_id'";

	/* check if $user_id is in Users table */
	if($mysqli->query($query))
	{
		$query = "INSERT INTO Posts (author_id, content) VALUES ('$user_id', '$content')";

		/* check if the post is inserted */
		if($mysqli->query($query))
		{
			echo "Post was successful";
		}
		else
		{
			echo "Post was unsuccessful";
		}
	}
	else
	{
		echo "User does not exist";
	}

	$mysqli->close();

	 ?>
</body>
</html>
