<?php
$page = intval($_GET['page'] ?? 0);
if ($page < 0) $page = 0;
$limit = 5;
$offset = $page * $limit;

$conn = mysqli_connect("localhost","root","","class_db");

$sql = "SELECT * FROM students LIMIT $offset, $limit";
$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['student_id'] . ": " . $row['first_name'] . " " . $row['last_name'] . "<br>";
}
?>