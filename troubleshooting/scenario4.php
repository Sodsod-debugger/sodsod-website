<?php
$conn = mysqli_connect("localhost","root","","class_db");
$first = empty($_POST['fname'] ?? '');
$last = empty($_POST['lname'] ?? '');
$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first',
'$last')";
mysqli_query($conn, $sql);
echo "Inserted!";
?>
