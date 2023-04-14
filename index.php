
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="becky";
$tableName="becky";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $db ";
if ($conn->query($sql) === TRUE) {
  $conn = new mysqli($servername, $username, $password,$db);
  $sql = "CREATE TABLE IF NOT EXISTS $tableName (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ptype VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,
img VARCHAR(220),
imgType VARCHAR(20)

)";




if ($conn->query($sql) !== TRUE) {
    echo "Error creating table: " . $conn->error;
}

$sql1 = "CREATE TABLE IF NOT EXISTS category (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price VARCHAR(30) NOT NULL,
    decs VARCHAR(220) NOT NULL,
    fca VARCHAR(220)
    
    )";
    if ($conn->query($sql1) !== TRUE) {
        echo "Error creating table: " . $conn->error;
    }
}
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$conn->close();



include_once("headlink.php");
include_once("header.php");
include_once("carousel.php");
include_once("service.php");
include_once("menu.php");
include_once("event.php");
include_once("Gallery.php");
include_once("contact.php");
include_once("footer.php");
include_once("footerlink.php");


?>
  


