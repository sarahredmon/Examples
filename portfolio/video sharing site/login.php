<?php
// login.php - User login
// At the beginning of your PHP files using sessions
session_set_cookie_params([
    'lifetime' => 3600,  // Adjust the session lifetime as needed
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();
session_regenerate_id(true);  // Regenerate session ID on login

if (isset($_SESSION['user_id'])) { // should it be '!isset'?
    header("Location: index.php");
    exit();
}

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Validate user credentials and set session variables

$stmt = $conn->prepare("SELECT id, password FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.php");
    } else {
        echo "Invalid username or password";
    }
} else {
    echo "Invalid username or password";
}
$stmt->close();

$conn->close();
?>