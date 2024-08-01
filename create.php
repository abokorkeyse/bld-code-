<?php
include 'db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city = $_POST['city'];
$phone_number = $_POST['phone_number'];
$gender = $_POST['gender'];
$blood_type = $_POST['blood_type'];
$quantity = $_POST['quantity'];

// Check if a record with the same first name, last name, and phone number exists
$check_sql = "SELECT * FROM blood_stock WHERE first_name='$first_name' AND last_name='$last_name' AND phone_number='$phone_number'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    echo "Error: A record with the same name and phone number already exists.";
} else {
    // Insert the new record if no duplicate is found
    $insert_sql = "INSERT INTO blood_stock (first_name, last_name, city, phone_number, gender, blood_type, quantity) VALUES ('$first_name', '$last_name', '$city', '$phone_number', '$gender', '$blood_type', $quantity)";

    if ($conn->query($insert_sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
