<?php
// Include config file
include "config.php";

// Fetch menu items
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Price: $" . $row["price"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>