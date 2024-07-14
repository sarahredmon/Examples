<h2>Update Course</h2>

<?php
require_once('mysqli_connect.php');

$id = mysqli_real_escape_string($dbc, $_POST['id']);
$courseID = mysqli_real_escape_string($dbc, $_POST['courseID']);
$prefix = mysqli_real_escape_string($dbc, $_POST['prefix']);
$number = mysqli_real_escape_string($dbc, $_POST['number']);
$departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
$instructorID = mysqli_real_escape_string($dbc, $_POST['instructorID']);

$query = "UPDATE course SET courseID='$courseID',prefix='$prefix',number='$number',departmentID='$departmentID',instructorID='$instructorID' WHERE id='$id'";
$result = @mysqli_query($dbc, $query);
if ($result) {
    echo "<p><b>The selected record has been updated.</b></p>";
} else {
    echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>

<p><a href=index.php>Go back</a></p>