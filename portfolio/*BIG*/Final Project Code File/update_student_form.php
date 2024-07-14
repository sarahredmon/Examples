<h2>Update Student</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM student WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_student.php" method="post">
    Student ID <input name="studentID" size="50" value="<?php echo $row['studentID'];?>"><br>
    First Name <input name="studentFirstName" size="50" value="<?php echo $row['studentFirstName'];?>"><br>
    Last Name <input name="studentLastName" size="50" value="<?php echo $row['studentLastName'];?>"><br>
    Advisor ID <input name="advisorID" size="50" value="<?php echo $row['advisorID'];?>"><br>
    Program ID <input name="programID" size="50" value="<?php echo $row['programID'];?>"><br>
    <input type="submit" value="update">
    <input type="reset" value="reset">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </form>

    <p><a href=index.php>Go back</a></p>
<?php
}

mysqli_close($dbc);
?>