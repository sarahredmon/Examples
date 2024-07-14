<h2>Update Grade</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM grade WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_grade.php" method="post">
    Grade ID <input name="gradeID" size="50" value="<?php echo $row['gradeID'];?>"><br>
    Letter <input name="letter" size="50" value="<?php echo $row['letter'];?>"><br>
    Course ID <input name="courseID" size="50" value="<?php echo $row['courseID'];?>"><br>
    Student ID <input name="studentID" size="50" value="<?php echo $row['studentID'];?>"><br>
    <input type="submit" value="update">
    <input type="reset" value="reset">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </form>

    <p><a href=index.php>Go back</a></p>
<?php
}

mysqli_close($dbc);
?>