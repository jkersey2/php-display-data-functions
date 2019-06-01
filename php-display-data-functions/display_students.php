<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Display Student Data</title>
</head>
<body>

<?php
include('student_class.php');  // add class file above session_start()
session_start();
if (isset($_SESSION['students'])) {
    $stu_data = $_SESSION['students'];
} else {
    header('Location: index.php');  // no stu_data created yet
    exit();
}
?>
<?php

if (isset($_POST['submit'])) {
    echo "<table border='1' cellspacing='8'><tr><th>Student Name</th><th>Scores</th><th>Grade</th></tr>";

    for ($i = 0; $i < count($stu_data); $i++) {
        echo "<tr><td> {$stu_data[$i]->get_stu_name()}</td><td> {$stu_data[$i]->get_midterm()}, {$stu_data[$i]->get_final()} </td><td> {$stu_data[$i]->finalGrade()} </td></tr>";
    }
    echo "Your List of Student Data:";
    echo "</table>";
}
?>
<form method="post" action ="display_students.php">

<input type="submit" name="submit" value="Display Student Data">
</form>
<p><a href="index.php">Add a Student</a></p>
</body></html>
