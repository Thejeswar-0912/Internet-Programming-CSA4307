<?php
include 'db.php';
$fastag_id = $_POST['fastag_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE fastag_id='$fastag_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    header("Location: dashboard.php?fastag_id=$fastag_id");
} else {
    echo "Invalid login credentials";
}
?>