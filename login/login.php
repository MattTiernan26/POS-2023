<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['admin'];
  $password = $_POST['123'];

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    $error_message = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <?php if (isset($error_message)) { ?>
    <p><?php echo $error_message; ?></p>
  <?php } ?>
  <form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username"><br><br>
    <label>Password:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
