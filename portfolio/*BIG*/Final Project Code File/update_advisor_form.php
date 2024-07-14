<h2>Update Advisor</h2>

<?php
require_once('mysqli_connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM advisor WHERE id=$id";
$result = @mysqli_query ($dbc, $query);
$num = mysqli_num_rows ($result);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
    <form action="update_advisor.php" method="post">
    Advisor ID <input name="advisorID" size="50" value="<?php echo $row['advisorID'];?>"><br>
    First Name <input name="advisorFirstName" size="50" value="<?php echo $row['advisorFirstName'];?>"><br>
    Last Name <input name="advisorLastName" size="50" value="<?php echo $row['advisorLastName'];?>"><br>
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