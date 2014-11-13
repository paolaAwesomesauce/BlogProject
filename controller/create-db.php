<?php

//Looks for config.php where we refactored the code
require_once(__DIR__ . "/../model/config.php");

	//connects our host,ud]sername, and password to mysqli
	$connection = new mysqli($host, $username, $password);

	//if/else statemant to check if we have a connection error
	if($connection->connect_error){
		die("<p>Error: " . $connection->connect_error . "</p>");
	}

	else{
		echo "<p>Success: " . $connection->host_info . "</p>";
	}

	//checks if slect_db exsits
	$exsits= $connection->select_db($database);

	//creates $database for my admin and checks if we have created it 
	if(!$exsits){
		$query = $connection->query("CREATE DATABASE $database");

		if($query){
			echo "<p>Successfully created database: " . $database . "</p>";

		}
	}
	else{
		echo "<p> Database already exsits </p>";
	}

	//Creates datatable for posts that have a unique id. Ouur post are text and none of them can be null.
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT," 
		. "title varchar(255) NOT NULL," 
		. "post text NOT NULL," 
		. "PRIMARY KEY (id))");

	//Creates table name posts and checks if theres an error in your connection.
	if($query){
		echo "<p>Successfully created table : posts</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}
	// closes $connection
	$connection->close();
?>