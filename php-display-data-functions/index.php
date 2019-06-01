<!doctype html> <html><head><meta charset="utf-8">
<title>Classes & Stuff</title>
</head><body>
    <h2>Student Data</h2>   <p>
<?php
include('student_class.php');  // add class file above session_start()
session_start();

if (isset($_SESSION['students'])) {
    $stu_data = $_SESSION['students'];
} else {
    $stu_data = array();
    $_SESSION['students'] = $stu_data;    // add array to SESSION
}

if (isset($_POST['submit'])) {
    empty($_POST['id']) ? $id = " - " : $id = $_POST['id'];
    empty($_POST['stu_name']) ? $stu_name = " - " : $stu_name = $_POST['stu_name'];
    empty($_POST['midterm']) ? $midterm = " - " : $midterm = $_POST['midterm'];
    empty($_POST['final']) ? $final = " " : $final = $_POST['final'];
    $stu_data[] = new Stu($id, $stu_name, $midterm, $final);
    $_SESSION['students'] = $stu_data;
}
?>

<h2>Add a student</h2>
<form method="post" action = "index.php">
<p><input type = "text" size="5" name = "id" > Student ID </p>
<p><input type = "text" size="15" name = "stu_name" > Student Name </p>
<p><input type = "text" size="5" name = "midterm" > Midterm Exam Score </p>
<p><input type = "text" size="5" name = "final" > Final Exam Score </p>

<input type="submit" name="submit" >
</form>
<p>Student count:  <?php echo count($stu_data);?></p>
<p><a href="display_students.php">Print All Student Data</a></p>
</body></html>
