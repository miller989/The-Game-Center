<html>

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
    session_start();
    $r =4;
    //if ( isset( $_SESSION['name'] ) ) {
        if ( $r == $r )  {
        $name = $_SESSION['name'];
        $permissions = $_SESSION['permissions'];
    } else {
        header("Location: login.html");
    }
    if ( isset( $_SESSION['cart'] ) ) {

    }else{
        $cart = [];
        $_SESSION['cart'] = $cart;
    }
?>

<?php include 'includes/top.php';?>
    
<?php
    $test = $_SESSION['cart'];
    $cartSize = count($test);
    //echo $cartSize;
    //echo '<br>';
    for($count = 0; $count < $cartSize; $count ++){
        echo $test[$count];
        echo '<br>';
    }
?>

</head>

<body>


    <!-- <form action="addCart.php" method="post">
                        <input name="addCart" id="addCart" required>
                        <input class="button" type="submit" value="addCart">
                </form>          -->




    <!-- Start jakes code  -->

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Cart</li>
                </ul>

            </div>

            <div id="cart" class="col-md-9">
                <div class="box">
                    <form action="addCart.php" method="post" enctype="multipart/form-data">
                        <h1>Shopping Cart</h1>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-responsive" src="admin/products/5.jpg" alt="DeadedBoi"></td>
                                        <td><a href="#">Dead by Daylight</a> </td>
                                        <td>
                                            <input type="number" id="quantity" value="2" min="1" max="10">
                                        </td>
                                        <td>$12.99</td>
                                        <td><input type="checkbox" id="delete" name="remove[]"></td>
                                        <td>$25.98</td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td><img class="img-responsive" src="admin/products/4.jpg" alt="Durgen"></td>
                                        <td><a href="#"> DRAGON BALL FighterZ</a> </td>
                                        <td>
                                            <input type="number" id="quantity" value="1" min="1" max="10">
                                        </td>

                                        <td>$23.99</td> <!-- game  price -->
                                        <td><input type="checkbox" id="delete" name="remove[]"></td>
                                        <td>$23.99</td> <!-- total price of that type of game-->
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$49.97</th> <!-- total pre checkout -->
                                    </tr>
                                </tfoot>
                            </table>
                            
                            <div class="form-inline pull-right">
                               <div class="form-group">
                                    <label> Discount Code: </label>
                                    <input type="text" name="code" class="form-control">
                                    <input type="submit" class="btn btn-primary" value="Apply" name="applyDiscount">
                               
                               </div>
                           </div>

                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="row same-heigh-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">Game You Might Like</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/4.jpg" alt="Product 1">
                            </a>
                            <div class="text">
                                <h3><a href="game.php"> DRAGON BALL FighterZ</a></h3>
                                <p class="price">$23.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                            </a>
                            <div class="text">
                                <h3><a href="game.php"> Monster Hunter World </a></h3>
                                <p class="price">$32.89</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="game.php">
                                <img class="img-responsive" src="admin/products/6.jpg" alt="Product 1">
                            </a>
                            <div class="text">
                                <h3><a href="game.php"> Red Dead Redemption 2</a></h3>
                                <p class="price">$60</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div id="order-summary" class="box">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shipping and additional costs are calculated based on value you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Sub-Total</td>
                                    <th>$49.97</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>49.97</th>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
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