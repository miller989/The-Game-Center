<!DOCTYPE html>
<html>
    <head>
<?php
session_start();
if ( isset( $_SESSION['name'] ) ) {

} else {
}
?>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="auth.php" method="post">
				<label for="username">
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>