<h2>Update Classroom</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM classroom WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_classroom.php" method="post">
    Classroom ID <input name="classroomID" size="50" value="<?php echo $row['classroomID'];?>"><br>
    Room <input name="room" size="50" value="<?php echo $row['room'];?>"><br>
    Building <input name="building" size="50" value="<?php echo $row['building'];?>"><br>
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