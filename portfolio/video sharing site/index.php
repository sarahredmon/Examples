<?php
include 'auth.php';

// index.php - Display videos
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

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM videos WHERE user_id=$user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>{$row['title']}</h2>";
        echo "<p>{$row['description']}</p>";
        echo '<video width="320" height="240" controls>';
        echo '<source src="' . $row['file_path'] . '" type="video/mp4">';
        echo 'Your browser does not support the video tag.';
        echo '</video><br><br>';
    }
} else {
    echo "No videos found.";
}

$conn->close();
?>