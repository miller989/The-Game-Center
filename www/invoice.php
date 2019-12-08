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
<?php include 'includes/top.php'; ?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Invoice
                </li>
            </ul>

        </div>
        <div class="col-md-12">
            <div class="box">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th> ON: </th>
                            <th> Due Amount: </th>
                            <th> Invoice No: </th>
                            <th> Order Date:</th>
                            <th> Status: </th>
                            <th> Status: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th> 1 </th>
                            <td> Amount due </td>
                            <td> Invoice number </td>
                            <td> Prder date </td>
                            <td> Status </td>
                            <td><a href="#" target="#" class="btn btn-primary btn-sm"> Confirm</a> </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>

<script src="assets/js/jquery-331.min.js"></script>
<script src="assets/js/bootstrap-337.min.js"></script>
</body>

</html>