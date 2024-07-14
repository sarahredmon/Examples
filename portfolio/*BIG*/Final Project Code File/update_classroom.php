<h2>Update Classroom</h2>

<?php
require_once('mysqli_connect.php');

$id = mysqli_real_escape_string($dbc, $_POST['id']);
$classroomID = mysqli_real_escape_string($dbc, $_POST['classroomID']);
$room = mysqli_real_escape_string($dbc, $_POST['room']);
$building = mysqli_real_escape_string($dbc, $_POST['building']);
$departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);

$query = "UPDATE classroom SET classroomID='$classroomID',room='$room',building='$building',departmentID='$departmentID' WHERE id='$id'";
$result = @mysqli_query($dbc, $query);
if ($result) {
    echo "<p><b>The selected record has been updated.</b></p>";
} else {
    echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>

<p><a href=index.php>Go back</a></p>