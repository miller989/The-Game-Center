<?php
session_start();
$_SESSION['savedCart'] = savedCart;
//** SQL housekeeping **//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgcdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    header("Location: ../index.php?err=100");
}
/** ensure user is logged in**/
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
} else {
    header("Location: ../login.php?err=1000");
}
/** Check if cart in session **/
if ( isset( $_SESSION['cart'] ) ) {
} else {
    /** if cart is not in session **/
    header("Location: ../index.php?err=1600");
}
/** setup list_query for items purchased **/
$cartSize = count($_SESSION['cart']);
$cart = $_SESSION['cart'];
for($count = 0; $count < $cartSize; $count ++){
    $list_query .= "#" . ($cart[$count]);
    echo $list_query;
    echo '<br>';
}

?>