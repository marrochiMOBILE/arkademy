<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arkademy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Tidak Terhubung Ke Database");
}
?>