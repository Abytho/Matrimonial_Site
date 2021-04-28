<?php
    require "connect.php";
    session_start();

    if(isset($_SESSION['userid'])) {
        if(isset($_GET['id'])) {
            $tid = $_GET['id'];
            $uid = $_SESSION['userid'];
            $name = '';

            $sql = "SELECT name FROM users WHERE id='$uid';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];

            $message = $name.' Rejected your request';

            $sql = "INSERT INTO notifications(user_id,notification_message, status) VALUES('$tid','$message',false);";
            mysqli_query($conn, $sql);

            $sql = "UPDATE send_request SET request_status='1' WHERE user_id='$tid' AND to_id='$uid';";
            mysqli_query($conn, $sql);

            header("Location: view_request.php");
            exit();

        }
    }
?>