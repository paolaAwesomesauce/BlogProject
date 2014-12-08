<?php
	require_once(__DIR__ . "/../model/config.php");

	//selects posts from database
	$query = "SELECT * FROM posts";

	//variable stores a connecton to $query variable
	$result = $_SESSION["connection"]->query($query);

	//div 'posts' hold our posts on our index page
	if($result){
		while ($row = mysqli_fetch_array($result) {
			echo "<div class='posts'";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br / >";
			echo "<p>" . $row['posts'] . "</h1>";
			echo "<br />";
			echo "</div>";
		}
	}

?>