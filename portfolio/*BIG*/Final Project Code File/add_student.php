<h2>Add Student</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $studentID = mysqli_real_escape_string($dbc, $_POST['studentID']);
    $studentFirstName = mysqli_real_escape_string($dbc, $_POST['studentFirstName']);
    $studentLastName = mysqli_real_escape_string($dbc, $_POST['studentLastName']);
    $advisorID = mysqli_real_escape_string($dbc, $_POST['advisorID']);
    $programID = mysqli_real_escape_string($dbc, $_POST['programID']);
    $query = "INSERT INTO student (studentID, studentFirstName, studentLastName, advisorID, programID) VALUES ('$studentID', '$studentFirstName', '$studentLastName', '$advisorID', '$programID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_student.php" method="POST">
    <p>Student ID <input type="text" name="studentID" size="50"></p>
    <p>First Name <input type="text" name="studentFirstName" size="50"></p>
    <p>Last Name <input type="text" name="studentLastName" size="50"></p>
    <p>Advisor ID <input type="text" name="advisorID" size="50"></p>
    <p>Program ID <input type="text" name="programID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>