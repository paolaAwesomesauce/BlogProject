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
//A function is a block of statements that can be used repeatedly in a program;will not execute immediately when a page loads;will be executed by a call to the function.
		public function openConnection(){

//connects our host,username, and password to mysqli
			$this->connection = new mysqli($this->host, $this->username,$this->database);

//if/else statemant to check if we have a connection error
			if($this->connection->connect_error){
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}

			else{
				echo "<p>Success: " . $connection->host_info . "</p>";
			}
		}

//function closes connection
		public function closeConnection(){
//to check weather or not we open the connection and then ti be able to close the connection
//isset makes sure there is info present in the variable;going to return true if there is info if variable doesnt have info there is no need to call the $this->conection->close();
			if(isset($this->connection)){
				$this->connection->close();
			}
		}
// after you call object you can and be able to specificlly call on the functions above. won't have to constanly repeat ourselves
		public function query($string){

		}
	}


?>