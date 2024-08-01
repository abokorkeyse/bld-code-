<?php
include 'db.php';

$sql = "SELECT id, first_name, last_name, city, phone_number, gender, blood_type, quantity FROM blood_stock";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Phone Number</th><th>Gender</th><th>Blood Type</th><th>Quantity</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["city"]."</td><td>".$row["phone_number"]."</td><td>".$row["gender"]."</td><td>".$row["blood_type"]."</td><td>".$row["quantity"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
