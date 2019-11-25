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
if (isset($_GET["err"])) {
    $err = $_GET["err"];
    $errhtml = errcheck($err);
} else {
}
session_start();
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $cartSize = count($cart);
} else {
    $cart = [];
    $cartSize = 0;
    $_SESSION['cart'] = $cart;
}
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
    $sessionControl = 'Logout';
} else {
    $sessionControl = 'Login';
}
?>
</head>

<body>
    <?php include 'includes/top.php';?>
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>
            </div>
            <div class="col-md-3">

                <?php
include "includes/sidebar.php";
?>
            </div>

            <div class="col-md-9">
                <div class="box">
                    <h1>Store</h1>

                </div>

                <div class="row">

                <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/1.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        Grand Theft Auto V
                                    </a>
                                </h3>
                                <p class="price">$29.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/2.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        ARK
                                    </a>
                                </h3>
                                <p class="price">$0.42</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        Monster Hunter World
                                    </a>
                                </h3>
                                <p class="price">$32.89</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/4.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        DRAGON BALL FighterZ
                                    </a>
                                </h3>
                                <p class="price">$23.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/5.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        Dead by Daylight
                                    </a>
                                </h3>
                                <p class="price">$12.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/6.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        Red Dead Redemption 2
                                    </a>
                                </h3>
                                <p class="price">$59.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/7.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        A Plague Tale
                                    </a>
                                </h3>
                                <p class="price">$59.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/8.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        Grand Theft Auto VI
                                    </a>
                                </h3>
                                <p class="price">$59.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/9.jpg" alt="Product 1">
                            </a>

                            <div class="text">

                                <h3>
                                    <a href="game.php">
                                        Grand Theft Auto VII
                                    </a>
                                </h3>
                                <p class="price">$59.99</p>
                                <p class="button">
                                    <a href="game.php" class="btn btn-default">View Details</a>
                                    <a href="game.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <ul class="pagination">
                    <li><a href="#">First</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">Last</a></li>
                </ul>


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