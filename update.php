<?php
include 'db.php';

$id = $_POST['id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE blood_stock SET quantity=$quantity WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
