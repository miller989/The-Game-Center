<?php
$servername = "localhost";  //replace your servername
$username = "root";   //replace your username
$password = "";        //replace your password
$dbname = "tgcdb";    //replace your database name
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	header("Location: ../index.php?err=100");
}
else{
    if ( !isset($_POST['username'], $_POST['password']) ) {
        die ('Please fill both the username and password field!');
    }
    if ($stmt = $conn->prepare('SELECT id, password, permissions FROM TgcUsers WHERE name = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $permissions);
        $stmt->fetch();

    if (password_verify($_POST['password'], $password)) {

        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        $_SESSION['permissions'] = $permissions;
        echo 'Welcome ' . $_SESSION['name'] . '!';
        echo 'Permission ' . $_SESSION['permissions'];
        header("Location: index.php");
    } else {
        header("Location: login.php?err=1100");
    }
} else {
header("Location: login.php?err=1100");
}
$stmt->close();
    }
}
