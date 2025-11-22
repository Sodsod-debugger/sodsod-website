<?php
$conn = mysqli_connect("localhost","root","","class_db");
$newEmail = $_POST['email'];
$id =intval($_POST['student_id']);
$sql = "UPDATE students SET email='$newEmail'WHERE student_id=$id";
$res = mysqli_query($conn,$sql);
?>