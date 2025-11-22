<?php
$conn = mysqli_connect("localhost","root","","class_db");
$fname = isset($_POST['fname']) ? $POST['fname']:'';
$sql = "SELECT * FROM students WHERE first_name = '$fname'";
$res = mysqli_query($conn, $sql);
?>