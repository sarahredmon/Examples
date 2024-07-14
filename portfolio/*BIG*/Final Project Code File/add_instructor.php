<h2>Add Instructor</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $instructorID = mysqli_real_escape_string($dbc, $_POST['instructorID']);
    $instructorFirstName = mysqli_real_escape_string($dbc, $_POST['instructorFirstName']);
    $instructorLastName = mysqli_real_escape_string($dbc, $_POST['instructorLastName']);
    $departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
    $query = "INSERT INTO instructor (instructorID, instructorFirstName, instructorLastName, departmentID) VALUES ('$instructorID', '$instructorFirstName', '$instructorLastName', '$departmentID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_instructor.php" method="POST">
    <p>Instructor ID <input type="text" name="instructorID" size="50"></p>
    <p>First Name <input type="text" name="instructorFirstName" size="50"></p>
    <p>Last Name <input type="text" name="instructorLastName" size="50"></p>
    <p>Department ID <input type="text" name="departmentID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>