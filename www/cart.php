<?php
session_start();
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
} else {
    header("Location: login.html");
}
?>
<html>
<head>
    <title>Welcome to The Game Central!</title>
</head>
<body>
<?php
$cart[0] = 1;
$cart[1] = 2;
$cart[2] = 3;
$cart[3] = 4;
$cart[4] = 5;
$cart[5] = 6;
$_SESSION['cart'] = $cart;
$test = $_SESSION['cart'];
$cartSize = count($test);
for($count = 0; $count < $cartSize; $count ++){
    echo $test[$count];
    echo '<br>';
}
?>

<p>
fgddsfgfdsgfdsgdsagsgsasgsagsagsafgasgsgsgs
</p>
<?php
$cart1 = $_SESSION['cart'];
$cartSize = count($cart1);
/**
 * add to cart function
 **/
$addCart = 1152;
$cartSize++;
$cart1[$cartSize - 1] = $addCart;
for($count = 0; $count < $cartSize; $count ++){
     echo $cart1[$count];
     echo '<br>';
 }


?>


</body>
</html>

