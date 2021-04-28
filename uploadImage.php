<?php
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
        $imagePath = 'uploads/'.$_FILES['file']['name'];
        
        require "connect.php";
        session_start();
        $uid = $_SESSION['userid'];

        $sql = "INSERT INTO user_images(user_id,image_path) VALUES('$uid','$imagePath');";
        mysqli_query($conn, $sql);

        $sql = "SELECT * FROM user_images WHERE user_id='$uid' ORDER BY id desc;";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            echo '<img src="'.$row["image_path"].'" class="us-pic"/>'
            ;
        }

    }
?>