<?php
	//helps us reach certain files with minimal work
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>
<!-- form created so already created user can login -->
<form method="post" action="<?php echo $path . "controller/login-user.php";?>">
	<!-- label for user to insertmthere username  -->
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
		<button type="submit" class="btn btn-primary btn-lg">Submit</button>
	</div>
</form>