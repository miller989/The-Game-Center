<?php
session_start();
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
} else {
    header("Location: login.html");
}
$servername = "localhost";  //replace your servername
$username = "root";   //replace your username
$password = "";        //replace your password
$dbname = "tgcdb";    //replace your database name
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo ' not connected';
}
else{
$sql = "SELECT id, name, permissions FROM TgcUsers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " id: " . $row["id"].  " name: " . $row["name"].  " role: " . $row["permissions"]. "<br>";
    }
} else {
    echo "0 results";
}

?>



<?php
echo 'Welcome ' . $name . "!" . $permissions;
switch ($permissions){
case 0:
    echo "You are a customer!";
    break;
case 1:
    echo "You are a publisher";
    break;
case 2:
    echo "you are an owner!";
    break;
}


}
?>
<a class="btn" href="logout.php">Logout</a>
