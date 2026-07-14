<?php
require_once "config.php";
$user = "admin";
$pass = password_hash("secret123", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
if(mysqli_query($conn, $sql)){
    echo "Test account created successfully! Username: admin | Password: secret123";
} else {
    echo "Error or user already exists.";
}
?>