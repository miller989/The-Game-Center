<!DOCTYPE html>
<html>

<head>
<?php
include 'includes/err.php';
/*Check for errors */
if (isset ($_GET["err"])){
    $err = $_GET["err"];
    $errhtml = errcheck($err);
}else{
}
?>
	<meta charset="utf-8">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
<link rel="stylesheet" href="assets/fonts/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-337.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php
echo $errhtml;
?>
    <div class="loginbox">
		<h1>Login</h1>
		<form action="auth.php" method="post">
			<label for="username">
			</label>
			<input type="text" name="username" placeholder="Username" id="username" required>
			<label for="password">
			</label>
			<input type="password" name="password" placeholder="Password" id="password" required>
			<input class="button" type="submit" value="Login">
			<a href="register/index.php">Don't have an account?</a>
		</form>
	</div>
</body>

</html>
