<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' where sid = {$stu_id}";

 $result = mysqli_query($conn, $sql) or die("query unsuccessful");


 header("location: http://localhost/crud/index.php");
 mysqli_close($conn);





?>