<?php
include('config.php');

$sql = "SELECT * FROM menu_items WHERE type = 'drinks'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Drink Menu</title>
</head>
<body>
  <h1>Drink Menu</h1>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="food-item">
      <h2><?php echo $row['name']; ?></h2>
      <p><?php echo $row['description']; ?></p>
      <p>Price: $<?php echo number_format($row['price'], 2); ?></p>
    </div>
  <?php } ?>
</body>
</html>