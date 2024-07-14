<h2>Update Instructor</h2>

<?php
require_once('mysqli_connect.php');

$id = mysqli_real_escape_string($dbc, $_POST['id']);
$instructorID = mysqli_real_escape_string($dbc, $_POST['instructorID']);
$instructorFirstName = mysqli_real_escape_string($dbc, $_POST['instructorFirstName']);
$instructorLastName = mysqli_real_escape_string($dbc, $_POST['instructorLastName']);
$departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);

$query = "UPDATE instructor SET instructorID='$instructorID',instructorFirstName='$instructorFirstName',instructorLastName='$instructorLastName',departmentID='$departmentID' WHERE id='$id'";
$result = @mysqli_query($dbc, $query);
if ($result) {
    echo "<p><b>The selected record has been updated.</b></p>";
} else {
    echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>

<p><a href=index.php>Go back</a></p>