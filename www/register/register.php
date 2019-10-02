<?php
$servername = "localhost";  //replace your servername
$username = "root";   //replace your username
$password = "";        //replace your password
$dbname = "tgcdb";    //replace your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo ' not connected';
}
else{    //    echo 'connected';

    if (!isset($_POST['username'], $_POST['password'])) {
        // Could not get the data that should have been sent.
        die ('Please complete the registration form!');
    }
if (empty($_POST['username']) || empty($_POST['password'])) {
    // One or more values are empty.
    die ('Please complete the registration form');
}
if ($stmt = $conn->prepare('SELECT id, password FROM TgcUsers WHERE name = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // Username already exists
        echo 'Username exists, please choose another!';
    } else {
        if ($stmt = $conn->prepare('INSERT INTO TgcUsers (name, password) VALUES (?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('ss', $_POST['username'], $password);
            //echo $stmt;
            $stmt->execute();
            echo 'You have successfully registered, you can now login!';
            header("location: ../login.html");
        } else {
            // Something is wrong with the sql
            echo 'errsql new acct';
        }
    }
    $stmt->close();
} else {
    // Something is wrong with the sql
    echo 'errsql';
}
$conn->close();
}
?>
