<?php
	require_once(__DIR__ . "/../model/config.php");

	//inputs email to database 
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

	//inputs username to database
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);

	//inputs password to database
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//echo our email username and password
	echo $email . " - " . $username . " - " . $password;
?>