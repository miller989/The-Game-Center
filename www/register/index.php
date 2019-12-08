<!DOCTYPE html>
<html>

<head>
    <?php
include '../includes/err.php';
/*Check for errors */
if (isset ($_GET["err"])){
    $err = $_GET["err"];
    $errhtml = errcheck($err);
}else{
}
?>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/fonts/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-337.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>TGC</title>
    <script>
        $(document).ready(function () {
            $("#ConfirmPassword").keyup(function () {
                if ($("#password").val() != $("#ConfirmPassword").val()) {
                    $("#msg").html("Password do not match").css("color", "red");
                    //   document.getElementById("btnSubmit").disabled = true;
                } else {
                    $("#msg").html("Password matched").css("color", "green");
                    // document.getElementById("btnSubmit").disabled = false;
                }
            });
        });
    </script>
</head>


<body>
    <br /><br />
    <div id="content">
        <div class="container">
            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>Account </li>
                </ul>

            </div>

            <div class="col-md-12">
                <div class="box">

                    <div class="box-header">

                        <center>
                            <h1> Register </h1>
                        </center>

                    </div>

                    <!-- start -->
                    <form action="register.php" method="post" autocomplete="off">

                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="username" placeholder="Username" id="username" class="form-control"required>
                        </div>

                        <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" placeholder="Password" id="password"class="form-control" required>
                            
                        </div>
                        
                        <div class="form-group">
                            <label> Password Confirmation </label>
                            <input type="password" id="ConfirmPassword" placeholder="Password Confirmation" class="form-control" required>
                        </div>

                        <div class="text-center">
                            <input  id=btnSubmit type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </form>

                    <center>
                        <a href="../login.php">Have an account?</a>
                    </center>
                    <br /><br />

                </div>
            </div>
        </div>
    </div>

    <?php
    include("../includes/footer.php");
    ?>

    <script src="assets/js/jquery-331.min.js"></script>
    <script src="assets/js/bootstrap-337.min.js"></script>
</body>


















