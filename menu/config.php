<?php
$servername = "127.0.0.1";
$username = "admin";
$password = "123";
$dbname = "pos_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
