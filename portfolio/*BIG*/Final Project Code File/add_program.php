<h2>Add Program</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $programID = mysqli_real_escape_string($dbc, $_POST['programID']);
    $programName = mysqli_real_escape_string($dbc, $_POST['programName']);
    $departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
    $query = "INSERT INTO program (programID, programName, departmentID) VALUES ('$programID', '$programName', '$departmentID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_program.php" method="POST">
    <p>Program ID <input type="text" name="programID" size="50"></p>
    <p>Program Name <input type="text" name="programName" size="50"></p>
    <p>Department ID <input type="text" name="departmentID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>