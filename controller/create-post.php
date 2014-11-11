<?php
	//looks for database.php
	require_once(__DIR__ . "/../model/database.php");

	//establishes connection to dattabase
	$connection = new mysqli($host, $username, $password, $database);

	// varible filter the input, gets the posts from title and filters it to make sure its a string 
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);

	//varible filter the input, gets the posts from post and filters it to make sure its a string 
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	//echos the variable title
	echo "<p>Title: $title</p>";

	//echos the variable post
	echo "<p>Post: $post</p>";

	//closes connection
	$connection->close();

?>