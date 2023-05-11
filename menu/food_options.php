<?php
include('config.php');

// Define an array of food options
$food_options = array(
  array('name' => 'Cheeseburger', 'description' => 'A juicy beef patty topped with melted cheese, lettuce, tomato, and onion', 'price' => 8.99),
  array('name' => 'Pizza', 'description' => 'A delicious pizza with your choice of toppings', 'price' => 12.99),
  array('name' => 'Fish and Chips', 'description' => 'Freshly fried cod served with crispy french fries and tartar sauce', 'price' => 10.99),
  array('name' => 'Caesar Salad', 'description' => 'Fresh romaine lettuce topped with grilled chicken, croutons, and creamy Caesar dressing', 'price' => 7.99),
  array('name' => 'Chicken Alfredo', 'description' => 'Tender chicken and fettuccine pasta smothered in a rich and creamy Alfredo sauce', 'price' => 11.99),
);

// Insert each food option into the database
foreach ($food_options as $food) {
  $name = mysqli_real_escape_string($conn, $food['name']);
  $description = mysqli_real_escape_string($conn, $food['description']);
  $price = $food['price'];
  $type = 'food';
  
  $sql = "INSERT INTO menu_items (name, description, price, type) VALUES ('$name', '$description', $price, '$type')";
  mysqli_query($conn, $sql);
}

echo "Added " . count($food_options) . " food options to the menu_items table";
?>
