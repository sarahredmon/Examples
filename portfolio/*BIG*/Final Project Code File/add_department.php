<h2>Add Department</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
    $departmentName = mysqli_real_escape_string($dbc, $_POST['departmentName']);
    $query = "INSERT INTO department (departmentID, departmentName) VALUES ('$departmentID', '$departmentName')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_department.php" method="POST">
    <p>Department ID <input type="text" name="departmentID" size="50"></p>
    <p>Department Name <input type="text" name="departmentName" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>