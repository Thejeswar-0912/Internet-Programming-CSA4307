<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$vehicle_no = $_POST['vehicle_no'];
$fastag_id = $_POST['fastag_id'];
$balance = $_POST['balance'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, vehicle_no, fastag_id, balance, password)
        VALUES ('$name', '$email', '$vehicle_no', '$fastag_id', '$balance', '$password')";

if ($conn->query($sql)) {
    echo "Registration successful.";
} else {
    echo "Error: " . $conn->error;
}
?>