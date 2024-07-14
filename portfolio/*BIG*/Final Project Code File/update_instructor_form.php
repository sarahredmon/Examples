<h2>Update Instructor</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM instructor WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_instructor.php" method="post">
    Instructor ID <input name="instructorID" size="50" value="<?php echo $row['instructorID'];?>"><br>
    First Name <input name="instructorFirstName" size="50" value="<?php echo $row['instructorFirstName'];?>"><br>
    Last Name <input name="instructorLastName" size="50" value="<?php echo $row['instructorLastName'];?>"><br>
    Department ID <input name="departmentID" size="50" value="<?php echo $row['departmentID'];?>"><br>
    <input type="submit" value="update">
    <input type="reset" value="reset">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </form>

    <p><a href=index.php>Go back</a></p>
<?php
}

mysqli_close($dbc);
?>