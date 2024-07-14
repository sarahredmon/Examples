<h2>Add Course</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $courseID = mysqli_real_escape_string($dbc, $_POST['courseID']);
    $prefix = mysqli_real_escape_string($dbc, $_POST['prefix']);
    $number = mysqli_real_escape_string($dbc, $_POST['number']);
    $departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
    $instructorID = mysqli_real_escape_string($dbc, $_POST['instructorID']);
    $query = "INSERT INTO course (courseID, prefix, number, departmentID, instructorID) VALUES ('$courseID', '$prefix', '$number', '$departmentID', '$instructorID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_course.php" method="POST">
    <p>Course ID <input type="text" name="courseID" size="50"></p>
    <p>Course Prefix <input type="text" name="prefix" size="50"></p>
    <p>Course Number <input type="text" name="number" size="50"></p>
    <p>Department ID <input type="text" name="departmentID" size="50"></p>
    <p>Instructor ID <input type="text" name="instructorID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>