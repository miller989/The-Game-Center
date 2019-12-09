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


<body>
    <div id="content">
        <div class="container">
            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li>
                </ul>

            </div>

            <div class="col-md-3">

                <?php

    include("includes/usersidebar.php");

    ?>

            </div>

            <div class="col-md-9">
                <div class="box">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> ON: </th>
                                <th> Due Amount: </th>
                                <th> Invoice contents: </th>
                                <th> Order Date:</th>
                                <th> Status: </th>
                                <th>  </th>
                            </tr>
                        </thead>

                        <!-- instance  -->
                        <tbody>
                            <tr>
                                <th> 101 </th>
                                <td> 12.99 </td>
                                <td> Dead by Daylight </td>
                                <td> 12/8/2019 </td>
                                <td> Paid </td>
                                <td><a href="invoice101.php" class="btn btn-primary btn-sm"> View</a> </td>
                            </tr>
                        </tbody>

                        <!-- instance  -->
                        <tbody>
                            <tr>
                                <th> 102 </th>
                                <td> 92.88 </td>
                                <td> Monster Hunter World </br> A Plague Tale </td>
                                <td> 12/8/2019 </td>
                                <td> Paid </td>
                                <td><a href="invoice102.php" class="btn btn-primary btn-sm"> View</a> </td>
                            </tr>
<!-- instance  -->
                        <tbody>
                            <tr>
                               <th> 103 </th>
                               <td> 53.98 </td>
                               <td> Grand theft Auto V </br> 	DRAGON BALL FighterZ </td>
                               <td> <?php $date = date('m/d/Y', time()); echo $date; ?>  </td>
                               <td> Paid </td>
                               <td><a href="invoice103.php" class="btn btn-primary btn-sm"> View</a> </td>
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
