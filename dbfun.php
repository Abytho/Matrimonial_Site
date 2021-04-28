<?php
require_once'connect.php';

session_start();
   
class dbfun{
 function getConnection(){


    //connect to database
    $db = new connect;
    $conn=$db->__construct();
    return $conn;

     }
   // destructor 
   function  __destruct() 
   {
     
    }   



 // public function registration($conn,$prfile_created,$name,$gender,$dob,$marital_status,$denomination,$division,$subcast,$mother_tongue,$country,$mobile,$email,$password){
  //  $sql1 = mysqli_query($conn,"insert into registration(prfile_created,name,gender,dob,marital_status,denomination,division,subcast,mother_tongue,country,mobile,email,password) values ('$prfile_created','$name','$gender','$dob','$marital_status','$denomination','$division','$subcast','$mother_tongue','$country','$mobile','$email','$password')") or die(mysql_error()); 
    // $sql2 = mysqli_query($conn,"insert into login(email,password) values ('$email','$password')") or die(mysql_error()); 

    // return $sql2;
     
   
 // }

   //  public function registration($conn,$name,$dob,$email,$mobile,$password){
   // $sql1 = mysqli_query($conn,"insert into registration(name,dob,mobile) values ('$name','$dob','$mobile')") ;  
     
     //$sql2 = mysqli_query($conn,"insert into login(email,password) values ('$email','$password')");  
    // return $sql2;

 // }
    public function registration($conn,$prfile_created,$name,$gender,$dob,$marital_status,$denomination,$division,$subcast,$mother_tongue,$country,$mobile,$email,$password){

    $sql = "INSERT INTO registration (prfile_created, name, gender, dob, marital_status, denomination, division, subcast, mother_tongue, country, mobile, email, password)
VALUES ('$prfile_created', '$name', '$gender', '$dob', '$marital_status', '$denomination', '$division', '$subcast', '$mother_tongue', '$country', '$mobile', '$email', '$password')";
$sql2 = "INSERT INTO login(email, password) VALUES ('$email', '$password')"; 

if (($conn->query($sql) === TRUE) && ($conn->query($sql2) === TRUE)){
  echo "New record created successfully";
  header("location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


public function login($conn,$email,$password){


$sql3 = "SELECT * FROM login WHERE email= '$email' and PASSWORD = '$password'";
 
    
      

      $result = mysqli_query($conn,$sql3);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC );
      $count = mysqli_num_rows( $result);


  
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $row['email'];
         //echo  $_SESSION['login_user'];
         header("location:indexi.php");
      }else {
         $error = "Your Login Name or Password is invalid";
   }}



   









    }


?>

