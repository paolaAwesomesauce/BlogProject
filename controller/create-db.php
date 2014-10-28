<?php

//Looks for database.php
require_once("/../model/database.php");

	//connects our host,ud]sername, and password to mysqli
	$connection = new mysqli($host, $username, $password);

	//if/else statemant to check if we have a connection error
	if($connection->connect_error){
		die("Error: " . $connection->connect_error);
	}

	else{
		echo "Success: " . $connection->host_info;
	}

	//checks if slect_db exsits
	$exsits= $connection->select_db($database);

	//creates $database for my admin and checks if we have created it 
	if(!$exsits){
		$query = $connection->query("CREATE DATABASE $database");

		if($query){
			echo " Successfully created database: " . $database;

		}
	}
	else{
		echo "Database has already exsits";
	}

	//Creates datatable for posts that have a unique id. Ouur post are text and none of them can be null.
	$query = $connection->query("CREATE TABLE posts ("
		. "id int (11) NOT NULL AUTO_INCREMENT," 
		. "title varchar(255) NOT NULL," 
		. "post text NOT NULL," 
		. "PRIMARY KEY (id)");

	// closes $connection
	$connection->close();
?>