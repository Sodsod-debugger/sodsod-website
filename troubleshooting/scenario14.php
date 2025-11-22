<?php
$data = $_POST;
$fname = $data ['first_name'];
$lname = $data ['last_name'];
$email = $data ['email'];
$sql = "INSERT INTO students (first_name, last_name, email)
VALUES ('$fname', '$lname', '$email')";
$res = mysqli_query($conn,$sql);
?>