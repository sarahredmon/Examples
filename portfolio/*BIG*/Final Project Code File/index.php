<html>
<body>

<strong><em><u>University Registrar’s Office Records</u></em></strong> ***

<?php
require_once('mysqli_connect.php');
?>
    
<a href=index.php><strong><em>Show All Records</em></strong></a> | <a href=add_advisor.php>Add Advisor</a> | <a href=add_classroom.php>Add Classroom</a> | <a href=add_course.php>Add Course</a> | <a href=add_department.php>Add Department</a> | <a href=add_grade.php>Add Grade</a> | <a href=add_instructor.php>Add Instructor</a> | <a href=add_program.php>Add Program</a> | <a href=add_student.php>Add Student</a>
<form action="index.php" method="post"> <strong>Search:</strong> <input name="query" size=20><input type="submit" value="search"></form>

<?php
echo "<h2>ADVISORS</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM advisor WHERE advisorID LIKE '%$query%'
                OR (advisorFirstName LIKE '%$query%')
                OR (advisorLastName LIKE '%$query%')
                OR (departmentID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM advisor";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Advisor record</em></p>";
    } else {
        echo "<p><em>There are $num Advisor records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Advisor ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Department ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['advisorID']. "</td>";
        echo "<td>". $row['advisorFirstName']. "</td>";
        echo "<td>". $row['advisorLastName']. "</td>";
        echo "<td>". $row['departmentID']. "</td>";
        echo "<td><a href=update_advisor_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_advisor_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Advisor record</em></p>";
}


echo "<h2>CLASSROOMS</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM classroom WHERE classroomID LIKE '%$query%'
                OR (room LIKE '%$query%')
                OR (building LIKE '%$query%')
                OR (departmentID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM classroom";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Classroom record</em></p>";
    } else {
        echo "<p><em>There are $num Classroom records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Classroom ID</td>
                <td>Room</td>
                <td>Building</td>
                <td>Department ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['classroomID']. "</td>";
        echo "<td>". $row['room']. "</td>";
        echo "<td>". $row['building']. "</td>";
        echo "<td>". $row['departmentID']. "</td>";
        echo "<td><a href=update_classroom_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_classroom_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Classroom record</em></p>";
}


echo "<h2>COURSES</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM course WHERE courseID LIKE '%$query%'
                OR (prefix LIKE '%$query%')
                OR (number LIKE '%$query%')
                OR (departmentID LIKE '%$query%')
                OR (instructorID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM course";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Course record</em></p>";
    } else {
        echo "<p><em>There are $num Course records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Course ID</td>
                <td>Course Prefix</td>
                <td>Course Number</td>
                <td>Department ID</td>
                <td>Instructor ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['courseID']. "</td>";
        echo "<td>". $row['prefix']. "</td>";
        echo "<td>". $row['number']. "</td>";
        echo "<td>". $row['departmentID']. "</td>";
        echo "<td>". $row['instructorID']. "</td>";
        echo "<td><a href=update_course_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_course_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Course record</em></p>";
}


echo "<h2>DEPARTMENTS</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM department WHERE departmentID LIKE '%$query%'
                OR (departmentName LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM department";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Department record</em></p>";
    } else {
        echo "<p><em>There are $num Department records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Department ID</td>
                <td>Department Name</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['departmentID']. "</td>";
        echo "<td>". $row['departmentName']. "</td>";
        echo "<td><a href=update_department_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_department_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Department record</em></p>";
}


echo "<h2>GRADES</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM grade WHERE gradeID LIKE '%$query%'
                OR (letter LIKE '%$query%')
                OR (courseID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM grade";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Grade record</em></p>";
    } else {
        echo "<p><em>There are $num Grade records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Grade ID</td>
                <td>Letter</td>
                <td>Course ID</td>
                <td>Student ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['gradeID']. "</td>";
        echo "<td>". $row['letter']. "</td>";
        echo "<td>". $row['courseID']. "</td>";
        echo "<td>". $row['studentID']. "</td>";
        echo "<td><a href=update_grade_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_grade_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Grade record</em></p>";
}


echo "<h2>INSTRUCTORS</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM instructor WHERE instructorID LIKE '%$query%'
                OR (instructorFirstName LIKE '%$query%')
                OR (instructorLastName LIKE '%$query%')
                OR (departmentID LIKE '%$query%')
                OR (studentID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM instructor";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Instructor record</em></p>";
    } else {
        echo "<p><em>There are $num Instructor records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Instructor ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Department ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['instructorID']. "</td>";
        echo "<td>". $row['instructorFirstName']. "</td>";
        echo "<td>". $row['instructorLastName']. "</td>";
        echo "<td>". $row['departmentID']. "</td>";
        echo "<td><a href=update_instructor_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_instructor_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Instructor record</em></p>";
}


echo "<h2>PROGRAMS</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM program WHERE programID LIKE '%$query%'
                OR (programName LIKE '%$query%')
                OR (departmentID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM program";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Program record</em></p>";
    } else {
        echo "<p><em>There are $num Program records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Program ID</td>
                <td>Program Name</td>
                <td>Department ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['programID']. "</td>";
        echo "<td>". $row['programName']. "</td>";
        echo "<td>". $row['departmentID']. "</td>";
        echo "<td><a href=update_program_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_program_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Program record</em></p>";
}
    

echo "<h2>STUDENTS</h2>";
if (!empty($_POST['query'])){
    $query = mysqli_real_escape_string($dbc, $_POST['query']);
    $query = "SELECT * FROM student WHERE studentID LIKE '%$query%'
                OR (studentFirstName LIKE '%$query%')
                OR (studentLastName LIKE '%$query%')
                OR (advisorID LIKE '%$query%')
                OR (programID LIKE '%$query%')";
}
else {
    $query = "SELECT * FROM student";
}
$result = @mysqli_query($dbc, $query);
$num = mysqli_num_rows($result);
if ($num > 0) {
    if ($num == 1) {
        echo "<p><em>There is $num Student record</em></p>";
    } else {
        echo "<p><em>There are $num Student records</em></p>";
    }
    echo "<table border=1>
            <tr style=font-weight:bold><td>Student ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Advisor ID</td>
                <td>Program ID</td>
                <td>Update</td>
                <td>Delete</td></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>".$row['studentID']. "</td>";
        echo "<td>". $row['studentFirstName']. "</td>";
        echo "<td>". $row['studentLastName']. "</td>";
        echo "<td>". $row['advisorID']. "</td>";
        echo "<td>". $row['programID']. "</td>";
        echo "<td><a href=update_student_form.php?id=" . $row['id']. ">Update</a></td>";
        echo "<td><a href=delete_student_confirm.php?id=" . $row['id']. ">Delete</a></td></tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "<p><em>There is no Student record</em></p>";
}

mysqli_close($dbc);
?>

</body>
</html>