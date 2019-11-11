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
    header("Location: ../index.php?err=1500");
}
/** setup sql query **/
if ($savedCart = 'logout'){
	$cartName = 'savedCart_' . date('Y-m-d H:i:s');
	}else{
	//pass name to function
	if (savedCart = 'savedCart_'.*){
		header("Location: ../index.php?err=2500");
	} 
	$cartName = $_SESSION['cartName'];
}

$cartSize = count($_SESSION['cart']);
$cart = $_SESSION['cart'];
for($count = 0; $count < $cartSize; $count ++){
    $list_query .= "#" . ($cart[$count]);
    echo $list_query;
    echo '<br>';
}

if($stmt = $conn->prepare('INSERT INTO savedCart (uid, gid, name) VALUES (?, ?)'))
	$stmt->bind_param('sss', $_SESSION['userid'], $list_query, $cartName);
	$stmt->execute();
	$conn->close();
	header('Location: ../index.php')
	}else {
	header('Location: ../index.php?err=110')
}


?>
