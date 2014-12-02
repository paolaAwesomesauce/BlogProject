<?php

//Looks for config.php where we refactored the code
require_once(__DIR__ . "/../model/config.php");

	//Creates datatable for posts that have a unique id. Our post are text and none of them can be null.
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT," 
		. "title varchar(255) NOT NULL," 
		. "post text NOT NULL," 
		. "PRIMARY KEY (id))");

	//Creates table name posts and checks if theres an error in your connection;
	if($query){
		echo "<p>Successfully created table : posts</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int (11) NOT NULL AUTO_INCREMENT," 
		. "username varchar(30) NOT NULL,"
		."email varchar (50) NOT NULL,"
		. "password char(128) NOT NULL,"
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

	if ($query) {
		echo "<p>Successfully created table: users</p>";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>