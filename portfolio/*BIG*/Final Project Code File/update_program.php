<h2>Update Program</h2>

<?php
require_once('mysqli_connect.php');

$id = mysqli_real_escape_string($dbc, $_POST['id']);
$programID = mysqli_real_escape_string($dbc, $_POST['programID']);
$programName = mysqli_real_escape_string($dbc, $_POST['programName']);
$departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);

$query = "UPDATE program SET programID='$programID',programName='$programName',departmentID='$departmentID' WHERE id='$id'";
$result = @mysqli_query($dbc, $query);
if ($result) {
    echo "<p><b>The selected record has been updated.</b></p>";
} else {
    echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>

<p><a href=index.php>Go back</a></p>