<?php
/*
$servername = "localhost";
$database = "carbones";
$username = "root";
$password = "usbw";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
*/

    $con=mysqli_connect("localhost", "root", "", "carbones") or die ("error de conexion");


?>