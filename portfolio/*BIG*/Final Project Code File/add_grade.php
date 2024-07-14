<h2>Add Grade</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $gradeID = mysqli_real_escape_string($dbc, $_POST['gradeID']);
    $letter = mysqli_real_escape_string($dbc, $_POST['letter']);
    $courseID = mysqli_real_escape_string($dbc, $_POST['courseID']);
    $studentID = mysqli_real_escape_string($dbc, $_POST['studentID']);
    $query = "INSERT INTO grade (gradeID, letter, courseID, studentID) VALUES ('$gradeID', '$letter', '$courseID', '$studentID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_grade.php" method="POST">
    <p>Grade ID <input type="text" name="gradeID" size="50"></p>
    <p>Letter <input type="text" name="letter" size="50"></p>
    <p>Course ID <input type="text" name="courseID" size="50"></p>
    <p>Student ID <input type="text" name="studentID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>