<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In - User Management System</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="login">

		<form action="index.php" method="post">
			
			<fieldset>
				<legend><h1>Log In</h1></legend>

				<!-- <p class="error">Invalid Username / Password</p> -->

				<p>
					<label for="">Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>

				<p>
					<label for="">Password:</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>

				<p>
					<button type="submit" name="submit">Log In</button>
				</p>

			</fieldset>

		</form>		

	</div> <!-- .login -->
</body>
</html>
<?php mysqli_close($connection); ?>