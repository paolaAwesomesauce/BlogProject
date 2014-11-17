<?php
	//looks for config.php where we refactored our code
	require_once(__DIR__ . "/../model/config.php");

	//establishes connection to dattabase
	$connection = new mysqli($host, $username, $password, $database);

	// varible filter the input, gets the posts from title and filters it to make sure its a string 
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);

	//varible filter the input, gets the posts from post and filters it to make sure its a string 
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	$date = new DateTime('today');

	//query sends the information stores in $title and $post. Either true or not true
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post', DateTime='$date");

	//checks weather the query is true or not 
	if($query){
		echo "<p>Successfully inserted post: $title</p>";
		echo "<p>$date->format('m/d/y')</p>";

	}
	else{
		echo "<p>$connection->error</p>";
	}


	//closes connection
	$connection->close();

?>