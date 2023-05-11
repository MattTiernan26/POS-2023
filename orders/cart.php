<?php
// Start the session
session_start();

// Check if the cart is empty
if(empty($_SESSION['cart'])) {
  echo "Your cart is empty.";
} else {
  // Display the items in the cart
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
  echo "</table>";
}
?>