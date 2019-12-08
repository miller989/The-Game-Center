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
	<title>TGC</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
<link rel="stylesheet" href="../assets/fonts/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-337.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#ConfirmPassword").keyup(function(){
             if ($("#password").val() != $("#ConfirmPassword").val()) {
                 $("#msg").html("Password do not match").css("color","red");
              //   document.getElementById("btnSubmit").disabled = true;
             }else{
                 $("#msg").html("Password matched").css("color","green");
                // document.getElementById("btnSubmit").disabled = false;
            }
      });
});
</script>
</head>

<body>
	<div class="loginbox">

<form action="register.php" method="post" autocomplete="off">
				<label for="username">
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
				</label>
                <input type="password" name="password" placeholder="Password" id="password" required>
<label for="Password Confirmation">
</label>
<input type="password" id="ConfirmPassword" placeholder="Password Confirmation" required>
<div id="msg"></div>
<input class="button" id=btnSubmit type="submit"  value="Register">
</form>
</div>
</body>

</html>
