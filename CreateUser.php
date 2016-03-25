<html>
<head>
	<title>Create User</title>
</head>

<body>
	<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "dwendt", "ExplorerOnFire", "dwendt");

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	$newUserId = $_POST['user_id'];
	$query = "INSERT INTO Users (user_id) VALUES ('$newUserId')";

	if ($mysqli->query($query))
	{
		echo "New user: " . $newUserId . " successfully created!";
	}
	else
	{
		echo "User could not be created";
	}

	/* close connection */
	$mysqli->close();

	 ?>

</body>
</html>
