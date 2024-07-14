<?php
include 'auth.php';

// upload.php - Handle video uploads
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

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$user_id = $_SESSION['user_id'];

// Process the uploaded video file and save its information to the database

// Upload file handling (in upload.php)
$upload_dir = "uploads/";  // Ensure this directory is secure

$filename = uniqid() . '_' . basename($_FILES["file"]["name"]);
$target_path = $upload_dir . $filename;

// Perform file type validation and move the file
// (You can implement more robust validation based on your requirements)
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_path)) {
    // Insert video information into the database
    $file_path = $target_path;
    $sql = "INSERT INTO videos (title, description, filename, user_id, file_path) VALUES ('$title', '$description', '$filename', $user_id, $file_path)";
    if ($conn->query($sql) === TRUE) {
        echo "Video uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}

$conn->close();
?>