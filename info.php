<?php

require "connect.php";
session_start();

if(isset($_POST['SubmitButton'])) {

    $prfile_created=$_POST["createdby"];
    $gender=$_POST["gender"];;
    $dob=$_POST["dob"];
    $marital_status=$_POST["mstatus"];
    $denomination=$_POST["denom"];
    $division=$_POST["division"];
    $subcast=$_POST["subcast"];
    $education=$_POST["education"];
    $mother_tongue=$_POST["language"];
    $country=$_POST["country"];
    $mobile=$_POST["mobile"];
    $fname=$_POST["fname"];
    $foccupation=$_POST["foccupation"];
    $mname=$_POST["mname"];
    $moccupation=$_POST["moccupation"];
    $siblings=$_POST["siblings"];
    $edu=$_POST["edu"];
    $cast=$_POST["cast"];
    $age=$_POST["age"];
    $uid = $_SESSION['userid'];
    
    $sql = "INSERT INTO info_table(user_id, gender, dob, marital_status, created_by, denomination_id, division_id, subcast, education, mother_tounge, country, mobile) VALUES('$uid','$gender','$dob','$marital_status','$prfile_created','$denomination','$division','$subcast','$education','$mother_tongue','$country','$mobile');";

    $sql2 = "INSERT INTO family_details(user_id, fname, foccupation, mname, moccupation, siblings) VALUES('$uid','$fname','$foccupation','$mname','$moccupation','$siblings');";

    $sql3 = "INSERT INTO partner_details(user_id, education, cast, age) VALUES('$uid','$edu','$cast','$age');";



    if(($conn->query($sql) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE)) {
        $_SESSION['gender'] = $row['gender'];
        header("Location: index.php?success=createdBiodata");
        exit();
    }else {
        header("Location: registration.php?error");
        exit();
    }
}





?>