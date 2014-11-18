<?php
	//variable stores path for Blog project
	$path = "/BlogProject/";

	//deleted database b/c we don't need it anymore b/c we refactored the code
	//Variable that has our localhost stored in it
	$host = "localhost";
	//Name of our username
	$username = "root";
	//my admin password
	$password = "root";
	//Name of our database
	$database = "bolg_db";

//new database object that helps the query on database 
	$connection = new Database($host, $username, $password, $database);



?>