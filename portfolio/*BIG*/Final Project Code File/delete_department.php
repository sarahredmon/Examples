<h2>Delete Department</h2>

<?php
require_once('mysqli_connect.php');
$id = $_GET['id'];
$query = "DELETE FROM department WHERE id=$id";
$result = @mysqli_query($dbc, $query);

if($result) {
    echo "<strong>The selected record has been deleted.</strong>";
} else {
    echo "<strong>The selected record could NOT be deleted.</strong>";
}
echo "<p><a href=index.php>Go back</a></p>";
mysqli_close($dbc);
?>