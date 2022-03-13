<?php
$stu_id = $_GET['id'];

include 'config.php';

 $sql = "DELETE FROM student where sid = {$stu_id}";

 $result = mysqli_query($conn, $sql) or die("query successful");
 header("location: http://localhost/crud/index.php");
mysqli_close($conn)
?>