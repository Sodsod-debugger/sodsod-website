<?php
$conn = mysqli_connect("localhost","root","","class_db");
$id = intval($_POST['id'] ?? 0);
$email = $_POST['email'] ?? '';
$sql = "UPDATE students SET email='$email' WHERE student_id=$id";
$res = mysqli_query($conn, $sql);
echo "Updated!";
?>
