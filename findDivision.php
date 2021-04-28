<?php
    require "connect.php";

    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        

        $sql = "SELECT * FROM division WHERE domination_id='$id';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value=".$row['id'].">".$row['division']."</option>";
        }

    }

?>