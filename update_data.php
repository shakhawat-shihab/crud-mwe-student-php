<?php
 $s_id = $_POST['sid'];
 echo $s_id;
 $s_name = $_POST['sname'];
 $s_address = $_POST['saddress'];
 $s_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "Update student_mwe set stu_name='{$s_name}', stu_address='{$s_address}', stu_phone='{$s_phone}' where stu_id='{$s_id}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/multimedia_web/index.php");
mysqli_close($conn);

?>
