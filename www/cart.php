<?php
session_start();
if ( isset( $_SESSION['name'] ) ) {
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
<html>
<head>
    <title>Welcome to The Game Central!</title>
</head>
<body>
<?php
$test = $_SESSION['cart'];
$cartSize = count($test);
echo $cartSize;
echo '<br>';
for($count = 0; $count < $cartSize; $count ++){
    echo $test[$count];
    echo '<br>';
}
?>

<form action="addCart.php" method="post">
                        <input name="addCart" id="addCart" required>
                        <input class="button" type="submit" value="addCart">
                </form>

</body>
</html>

