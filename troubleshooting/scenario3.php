<?php
$conn = mysqli_connect("localhost","root","","class_db");
$age = $_GET['age'] ?? '1';
$sql = "SELECT * FROM students WHERE age = '$age'";
$res = mysqli_query($conn, $sql);
?>