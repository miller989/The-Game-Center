<?php
/** ensure user is logged in**/
session_start();
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
} else {
    header("Location: login.html?err=1000");
}
/** Check if cart in session **/
if ( isset( $_SESSION['cart'] ) ) {
    /** If cart in session **/
    $cart = $_SESSION['cart'];
    $cartSize = count($cart);
    /** Check if cart has posted information**/
    if ( !isset($_POST['addCart']) ) {
        header("Location: cart.php?err=2000");
    } else {
    $addCart = $_POST['addCart'];
    $cart[$cartSize] = $addCart;
    $_SESSION['cart'] = $cart;
    header("Location: cart.php");
    }
} else {
    /** if cart is not in session **/
    /** Check if cart has posted information**/
     if ( !isset($_POST['addCart']) ) {
        header("Location: cart.php?err=2000");
     } else {
    //** Create cart with posted information **//
    $cart[0] = $_POST['addCart'];
    $_SESSION['cart'] = $cart;
    header("Location: cart.php");
     }
}
?>
