<?php include 'header.php'; 

if(isset($_POST['deletebtn'])) {
    include("config.php");
    $student_id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE sid = {$student_id}";
    $result = mysqli_query($connection_name, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/PHP_Project_folder/crud/index.php");

    mysqli_close($connection_name);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>