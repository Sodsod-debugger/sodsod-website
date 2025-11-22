<?php
$conn = mysqli_connect("localhost","root","","class_db");
$id = intval($_GET['student_id']) ?? 0;
$sql = "DELETE FROM students WHERE student_id = $id";
mysqli_query($conn, $sql);
?>