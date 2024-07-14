<h2>Delete Advisor</h2>

<?php
require_once('mysqli_connect.php');
$id = $_GET['id'];

echo "<p>Are you sure you want to delete the selected record?</p>";
echo "<p><a href=delete_advisor.php?id=$id>YES</a>";
echo " <a href=index.php>NO</a></p>";
?>