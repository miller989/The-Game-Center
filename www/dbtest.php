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
else
    echo 'connected';
?>
<br>
<?php
$sql = "SELECT * FROM TgcUsers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " id: " . $row["id"].  " name: " . $row["name"].  " role: " . $row["role"].  " permid: " . $row["permissions"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

