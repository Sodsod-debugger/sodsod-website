<?php
$conn = mysqli_connect("localhost","root","","class_db");
$age = $_POST['age'] ?? 0;
$sql = "SELECT * FROM students WHERE age = $age";
$res = mysqli_query($conn, $sql);
?>