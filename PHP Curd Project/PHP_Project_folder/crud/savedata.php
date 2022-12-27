<?php

$student_name = $_POST['sname'];
$student_address = $_POST['saddress'];
$student_class = $_POST['class'];
$student_phone = $_POST['sphone'];


$connection_name = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");

$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$student_name}','{$student_address}','{$student_class}','{$student_phone}')";
$result = mysqli_query($connection_name, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/PHP_Project_folder/crud/index.php");

mysqli_close($connection_name);

?>