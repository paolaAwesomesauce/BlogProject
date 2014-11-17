<?php
//gives you the path to config.php
	require_once(__DIR__ . "/../model/config.php");

?>

<!-- creates the link for post.php -->
<nav>
	<ul>
		<a href="<?php echo $path . "post.php"; ?>">Blog Post Form</a>
	</ul>
</nav>