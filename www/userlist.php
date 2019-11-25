<?php
session_start();
if (isset ($_GET["err"])){
    $err = $_GET["err"];
    switch ($err){
    case 1000:
        $errhtml =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> You need to be <a href="login.html">logged in</a> to do that!
  </div>';
        break;
    case 2000:
        $errhtml =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> Nothing was posted! It\'s Dangerous to go alone!
            </div>';
        break;
    case 1100:
        $errhtml =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> Wrong username or password! Please try again.
  </div>';
        break;
         case 100:
        $errhtml =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> Database not connected!
  </div>';
    break;
}

}else{
}
echo $errhtml;
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
