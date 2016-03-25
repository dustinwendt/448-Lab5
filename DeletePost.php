<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "dwendt", "ExplorerOnFire", "dwendt");

/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

if(!empty($_POST['check_list'])){
     foreach($_POST['check_list'] as $post_id){
		$query = "DELETE FROM Posts WHERE post_id = $post_id";
		$mysqli->query($query);
     }
   }

foreach($_POST['check_list'] as $post_id)
{
	echo "Post " . $post_id . " successfully deleted.<br>";
}
//$posts_for_deletion = $_POST['check_list'];
//echo $posts_for_deletion;
$mysqli->close();

?>
