<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Posts<h1>

<!-- sends information to post and echos the path for the information to follow -->
<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
<!-- Creates div and label for title and a text input for title -->
	<div>
		<label for="title"> Title: </label>
		<input type="text" name="title" />
	</div>
	
	<!-- creates div with lablel dor posts and a textarea for posts -->
	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>

	<!-- Makes a submit button for our blog posts -->
	<div>
		<button type="submit" class="btn btn-success btn-lg">Submit</button>
	</div>
</form>