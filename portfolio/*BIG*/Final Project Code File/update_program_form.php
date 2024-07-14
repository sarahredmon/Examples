<h2>Update Program</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM program WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_program.php" method="post">
    Program ID <input name="programID" size="50" value="<?php echo $row['programID'];?>"><br>
    Program Name <input name="programName" size="50" value="<?php echo $row['programName'];?>"><br>
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