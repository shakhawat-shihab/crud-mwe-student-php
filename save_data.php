<?php

$s_id = $_POST['sid'];
$s_name = $_POST['sname'];
$s_address = $_POST['saddress'];
$s_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student_mwe(stu_id,stu_name,stu_address,stu_phone) VALUES ('{$s_id}','{$s_name}','{$s_address}','{$s_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/multimedia_web/index.php");
mysqli_close($conn);

?>
