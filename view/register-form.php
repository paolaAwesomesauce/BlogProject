<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<!-- Form created so user can register so they can be able to post, posts -->
<form method="post" action="<?php echo $path . "controller/create-user.php";?>">
<!--label for user to resgister their email -->
	<div>
		<label for="email">Email: </label>
		<input type="text" name="email" />
	</div>

<!-- label for user to register there user name  -->
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

<!-- label for user to input their password; password appears as dots not as text -->
	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

<!-- button to submit the info  -->
	<div>
		<button type="submit">Submit</button>
	</div>
</form>