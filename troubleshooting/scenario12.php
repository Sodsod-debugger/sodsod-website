<?php
$conn = mysqli_connect("localhost","root","","class_db");
$id = intval($_GET['student_id']);
$sql = "SELECT * FROM students WHERE student_id = $id";
$res = mysqli_query($conn, $sql);
?>