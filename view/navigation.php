<?php
//gives you the path to config.php
	require_once(__DIR__ . "/../model/config.php");
	
	require_once(__DIR__ . "/../controller/login-varify.php");

	if (!authenticateUser()) {
		header("Location: " . $path . "index.php");
		die();
	}

?>

<!-- creates the link for post.php -->

	<ul>
		<a href="<?php echo $path . "post.php"; ?>">Blog Post Form</a>
	</ul>
</nav>
</header>