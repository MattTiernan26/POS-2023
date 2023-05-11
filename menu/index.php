<?php
// Start the session
session_start();

// Check if the user is not logged in
if(!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Display the main page
echo "<h1>Welcome ".$_SESSION['username']."</h1>";
?>