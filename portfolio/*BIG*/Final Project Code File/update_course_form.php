<h2>Update Course</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM course WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_course.php" method="post">
    Course ID <input name="courseID" size="50" value="<?php echo $row['courseID'];?>"><br>
    Course Prefix <input name="prefix" size="50" value="<?php echo $row['prefix'];?>"><br>
    Course Number <input name="number" size="50" value="<?php echo $row['number'];?>"><br>
    Department ID <input name="departmentID" size="50" value="<?php echo $row['departmentID'];?>"><br>
    Instructor ID <input name="instructorID" size="50" value="<?php echo $row['instructorID'];?>"><br>
    <input type="submit" value="update">
    <input type="reset" value="reset">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </form>

    <p><a href=index.php>Go back</a></p>
<?php
}

mysqli_close($dbc);
?>