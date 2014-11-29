<?php
	//looks for config.php where we refactored our code
	require_once(__DIR__ . "/../model/config.php");

	//establishes connection to dattabase
	

	// varible filter the input, gets the posts from title and filters it to make sure its a string 
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);

	//varible filter the input, gets the posts from post and filters it to make sure its a string 
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	//query sends the information stores in $title and $post. Either true or not true
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

	//checks weather the query is true or not using sessins variables
	//echo date and time when you post a post  
	if($query){
		echo "<p>Successfully inserted post: $title</p>";
		echo date('l jS \of F Y h:i:s A');

	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}


	

?>