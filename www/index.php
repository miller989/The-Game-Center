<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fonts/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-337.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>TGC</title>
<?php
include 'includes/err.php';
/*Check for errors */
if (isset ($_GET["err"])){
    $err = $_GET["err"];
    $errhtml = errcheck($err);
}else{
}
session_start();
if ( isset( $_SESSION['cart'] ) ) {
    $cart = $_SESSION['cart'];
    $cartSize = count($cart);
}else{
    $cart = [];
    $cartSize = 0;
}
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
    $sessionControl = 'Logout';
} else {
    $sessionControl = 'Login';
}
    ?>


</head>

<body>
<?php include 'includes/top.php'; ?>
    <!-- img slider def not stolen   -->

    <div class="container" id="slider">
        <div class="col-md-12">

            <div class="carousel slide" id="myCarousel" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin/frontps/1.png" alt="Slider Image 1" style="max-height: 500px;">
                    </div>

                    <div class="item">
                        <img src="admin/frontps/2.png" alt="Slider Image 2" style="max-height: 500px;">
                    </div>

                    <div class="item">
                        <img src="admin/frontps/3.png" alt="Slider Image 3" style="max-height: 500vpx;">
                    </div>

                    <div class="item">
                        <img src="admin/frontps/4.png" alt="Slider Image 4" style="max-height: 500vpx;">
                    </div>

                </div>
            </div>
        </div>
    </div>




    <?php
    include("includes/hot.php");
    include("includes/footer.php");
    ?>

    <script src="assets/js/jquery-331.min.js"></script>
    <script src="assets/js/bootstrap-337.min.js"></script>
</body>

</html>
