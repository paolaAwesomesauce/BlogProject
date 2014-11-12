<?php
	//looks for database.php
	require_once(__DIR__ . "/../model/database.php");

	//establishes connection to dattabase
	$connection = new mysqli($host, $username, $password, $database);

	// varible filter the input, gets the posts from title and filters it to make sure its a string 
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);

	//varible filter the input, gets the posts from post and filters it to make sure its a string 
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	//query sends the information stores in $title and $post
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

	//closes connection
	$connection->close();

?>