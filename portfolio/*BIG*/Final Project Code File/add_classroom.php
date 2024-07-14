<h2>Add Classroom</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $classroomID = mysqli_real_escape_string($dbc, $_POST['classroomID']);
    $room = mysqli_real_escape_string($dbc, $_POST['room']);
    $building = mysqli_real_escape_string($dbc, $_POST['building']);
    $departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
    $query = "INSERT INTO classroom (classroomID, room, building, departmentID) VALUES ('$classroomID', '$room', '$building', '$departmentID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_classroom.php" method="POST">
    <p>Classroom ID <input type="text" name="classroomID" size="50"></p>
    <p>Room <input type="text" name="room" size="50"></p>
    <p>Building <input type="text" name="building" size="50"></p>
    <p>Department ID <input type="text" name="departmentID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>