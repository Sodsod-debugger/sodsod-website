<?php
$conn = mysqli_connect("localhost","root","","class_db");
$id = $_POST['id'] ?? '';
echo $id;
?>
<a href="view.php?id=3">View Student</a>
