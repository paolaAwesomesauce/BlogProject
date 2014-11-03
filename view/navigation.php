<?php
//gives you the path to post.phps
	require_once(__DIR__ . "/../model/config.php");

?>

<!-- creates the link for post.php -->
<nav>
	<ul>
		<li>
			<a href="<?php echo $path . "post.php"; ?>">Blog Post Form</a>
		</li>
	</ul>
</nav>