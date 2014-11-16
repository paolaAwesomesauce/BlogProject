<?php
// we are using a class so we wont be repeating the same code over and over again and so it will be easier to read the code.
// class are a collection of variables and fucntions
//makes database as an object
	class Database{
		//variables that can only be seen in this file.
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;

//the constructor is called on an object after it has been created where you can put code that calls on objects
//the variables in the braces are global variables
		public function__construct($host, $username, $password, $database){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}

//function opens connection
		public function openConnection(){

		}

//function closes connection
		public function closeConnection(){

		}
// after you call object you can and be able to specificlly call on the functions above. won't have to constanly repeat ourselves
		public function query($string){

		}
	}

?>