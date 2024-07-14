<h2>Update Department</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM department WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_department.php" method="post">
    Department ID <input name="departmentID" size="50" value="<?php echo $row['departmentID'];?>"><br>
    Department Name <input name="departmentName" size="50" value="<?php echo $row['departmentName'];?>"><br>
    <input type="submit" value="update">
    <input type="reset" value="reset">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </form>

    <p><a href=index.php>Go back</a></p>
<?php
}

mysqli_close($dbc);
?>