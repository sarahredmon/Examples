<h2>Update Student</h2>

<?php
require_once('mysqli_connect.php');

$id = mysqli_real_escape_string($dbc, $_POST['id']);
$studentID = mysqli_real_escape_string($dbc, $_POST['studentID']);
$studentFirstName = mysqli_real_escape_string($dbc, $_POST['studentFirstName']);
$studentLastName = mysqli_real_escape_string($dbc, $_POST['studentLastName']);
$advisorID = mysqli_real_escape_string($dbc, $_POST['advisorID']);
$programID = mysqli_real_escape_string($dbc, $_POST['programID']);

$query = "UPDATE student SET studentID='$studentID',studentFirstName='$studentFirstName',studentLastName='$studentLastName',advisorID='$advisorID',programID='$programID' WHERE id='$id'";
$result = @mysqli_query($dbc, $query);
if ($result) {
    echo "<p><b>The selected record has been updated.</b></p>";
} else {
    echo "<p>The record could not be updated due to a system error" . mysqli_error($dbc) . "</p>";
}
mysqli_close($dbc);
?>

<p><a href=index.php>Go back</a></p>