<?php
// Start the session
session_start();

// Check if the cart is empty
if(empty($_SESSION['cart'])) {
  echo "Your cart is empty.";
} else {
  // Calculate the total price
  $total_price = 0;
  foreach($_SESSION['cart'] as $item) {
    $total_price += $item['total_price'];
  }

  // Display the items in the cart and the total price
  echo "<table>";
  echo "<tr><th>Item Name</th><th>Item Price</th><th>Quantity</th><th>Total Price</th></tr>";
  foreach($_SESSION['cart'] as $item) {
    echo "<tr>";
    echo "<td>".$item['item_name']."</td>";
    echo "<td>".$item['item_price']."</td>";
    echo "<td>".$item['quantity']."</td>";
    echo "<td>".$item['total_price']."</td>";
    echo "</tr>";
  }
  echo "<tr><td colspan='3'>Total:</td><td>".$total_price."</td></tr>";
  echo "</table>";

  // Display the checkout form
  echo "<form method='post' action='place_order.php'>";
  echo "<label for='name'>Name:</label><input type='text' id='name' name='name' required><br>";
  echo "<label for='email'>Email:</label><input type='email' id='email' name='email' required><br>";
  echo "<label for='address'>Address:</label><textarea id='address' name='address' required></textarea><br>";
  echo "<input type='submit' value='Place Order'>";
  echo "</form>";
}
?>