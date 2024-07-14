<h2>Add Advisor</h2>

<?php
require_once('mysqli_connect.php');

if(isset($_POST['submitted'])) {
    $advisorID = mysqli_real_escape_string($dbc, $_POST['advisorID']);
    $advisorFirstName = mysqli_real_escape_string($dbc, $_POST['advisorFirstName']);
    $advisorLastName = mysqli_real_escape_string($dbc, $_POST['advisorLastName']);
    $departmentID = mysqli_real_escape_string($dbc, $_POST['departmentID']);
    $query = "INSERT INTO advisor (advisorID, advisorFirstName, advisorLastName, departmentID) VALUES ('$advisorID', '$advisorFirstName', '$advisorLastName', '$departmentID')";
    $result = @mysqli_query($dbc, $query);
    if($result) {
        echo "<p><strong>A new record has been added.</strong></p>";
    } else {
        echo "<p><strong>The record could not be added due to a system error: </strong>" . mysqli_error($dbc) . "</p>";
    }
}
mysqli_close($dbc);
?>
<form action="add_advisor.php" method="POST">
    <p>Advisor ID <input type="text" name="advisorID" size="50"></p>
    <p>First Name <input type="text" name="advisorFirstName" size="50"></p>
    <p>Last Name <input type="text" name="advisorLastName" size="50"></p>
    <p>Department ID <input type="text" name="departmentID" size="50"></p>
    <p><input type="submit" name="submitted" value="Submit"></p>
</form>

<p><a href=index.php>Go back</a></p>