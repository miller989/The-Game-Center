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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/fonts/font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-337.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>TGC</title>
</head>


<body>
<br /><br />
	<div id="content">
		<div class="container">
			<div class="col-md-12">

				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>Account </li>
				</ul>

			</div>

			<div class="col-md-12">
				<div class="box">

					<div class="box-header">

						<center>
							<h1> Login </h1>
						</center>

					</div>

					<form action="auth.php" method="post">

						<div class="form-group">

							<label> Username </label>

							<input type="text" name="username" placeholder="Username" id="username" class="form-control"
								required>

						</div>

						<div class="form-group">

							<label> Password </label>
							<input type="password" name="password" placeholder="Password" id="password"class="form-control" required>
							<br />
						</div>

						<div class="text-center">

							<button type="submit" value="Login" class="btn btn-primary">Login</button>

						</div>
					</form>

					<center>
						<a href="register/index.php">Don't have an account?</a>
					</center>
					<br /><br />

				</div>
			</div>
		</div>
	</div>
	
    <?php
    include("includes/footer.php");
    ?>

    <script src="assets/js/jquery-331.min.js"></script>
    <script src="assets/js/bootstrap-337.min.js"></script>
</body>

</html>