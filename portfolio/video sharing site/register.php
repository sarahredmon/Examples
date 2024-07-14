<?php
// register.php - User registration
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Validate if the username is not already taken
$stmt = $conn->prepare("SELECT id FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Username is already taken";
} else {
    // Insert new user into the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful";
    } else {
        echo "Error during registration";
    }
}

$stmt->close();
$conn->close();
?>