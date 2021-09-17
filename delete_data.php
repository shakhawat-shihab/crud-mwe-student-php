<?php
    $s_id=$_POST['sid'];
    //echo $s_id;
    $conn=mysqli_connect("localhost","root","","CRUD") or die("Connection Failed");
    $sql="Delete from student_mwe where stu_id='{$s_id}'";
    $result=mysqli_query($conn,$sql) or die("Query Failed");
    header("Location: http://localhost/multimedia_web/index.php");
    mysqli_close($conn);
?>