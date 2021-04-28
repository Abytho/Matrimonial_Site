<?php
    require "connect.php";
    session_start();

    if(isset($_GET['id'])) {
        $uid = $_SESSION['userid'];
        $tid = $_GET['id'];

        $sql = "SELECT * FROM send_request WHERE user_id='$uid' AND to_id='$tid';";
        if(mysqli_num_rows(mysqli_query($conn,$sql)) == 0) {
            $sql = "INSERT INTO send_request(user_id,to_id,request_status) VALUES('$uid','$tid','0');";
            if(mysqli_query($conn, $sql)) {
                header("Location: index.php?success=sendRequest");
                exit();
            }else {
                header("Location: index.php?error=sendRequestFailed");
                exit();
            }
        }else {
            header("Location: index.php?error=alreadySendRequest");
            exit();
        }

    }

?>