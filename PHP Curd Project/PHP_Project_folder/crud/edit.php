<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    include 'config.php';
    $student_id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE sid = {$student_id}";
    $result = mysqli_query($connection_name, $sql) or die("Query UnSuccessful");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>" autocomplete="off"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" autocomplete="off"/>
      </div>
      <div class="form-group">
          <label>Class</label>

        <!-- PHP FOR dynamic Class Selection -->
          <?php
            $sql_one = "SELECT * FROM studentclass";
            $result_one = mysqli_query($connection_name, $sql_one) or die("Query Unsuccessful.");

            if (mysqli_num_rows($result_one) > 0) {
                echo '<select name="sclass">';
                while ($row_one = mysqli_fetch_assoc($result_one)) {
                    if($row['sclass'] == $row_one['cid']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo "<option {$select} value='{$row_one['cid']}'>{$row_one['cname']}</option>";
                }
                echo '</select>';
            }
           ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" autocomplete="off"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
     }
        } 
?>
</div>
</div>
</body>
</html>
