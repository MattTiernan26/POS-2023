<?php
include('config.php');

// Define an array of drink options
$drink_options = array(
  array('name' => 'Water', 'description' => 'Water', 'price' => 0.00),
  array('name' => 'Lemonade', 'description' => 'Lemonade', 'price' => 1.99),
  array('name' => 'Iced Tea', 'description' => 'Tea', 'price' => 1.99),
  array('name' => 'Coke', 'description' => 'Soda', 'price' => 2.99),
  array('name' => 'Miller Lite', 'description' => 'Beer', 'price' => 4.99),
);

// Insert each drink option into the database
foreach ($drink_options as $drinks) {
  $name = mysqli_real_escape_string($conn, $drinks['name']);
  $description = mysqli_real_escape_string($conn, $drinks['description']);
  $price = $drinks['price'];
  $type = 'drinks';
  
  $sql = "INSERT INTO menu_items (name, description, price, type) VALUES ('$name', '$description', $price, '$type')";
  mysqli_query($conn, $sql);
}

echo "Added " . count($drinks_options) . " food options to the menu_items table";
?>