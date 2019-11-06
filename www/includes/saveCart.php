<?php
session_start();
/** ensure user is logged in**/
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
} else {
    header("Location: ../login.php?err=1000");
}
/** Check if cart in session **/
if ( isset( $_SESSION['cart'] ) ) {
    /** If cart in session **/
    //echo "dsfdsfdsf";
    //$cart = $_SESSION['cart'];
    //$cartSize = count($cart);
    //header("Location: ../index.php?test=1000");
} else {
    /** if cart is not in session **/
    header("Location: ../index.php?err=1500");
}
/** setup sql query **/

$cartSize = count($_SESSION['cart']);
$cart = $_SESSION['cart'];
for($count = 0; $count < $cartSize; $count ++){
    $list_query .= "#" . ($cart[$count]);
    //echo $cart[$count];
    echo $list_query;
    echo '<br>';
}
//header("Location: ../index.php?err=6000");

?>
