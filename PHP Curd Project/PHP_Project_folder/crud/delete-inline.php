<?php

$student_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$student_id}";

$result = mysqli_query($connection_name, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/PHP_Project_folder/crud/index.php");

mysqli_close($connection_name);


?>