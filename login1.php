<?php

$uname1 = $_POST['username'];
$upswd2 = $_POST['password'];




if (!empty($uname1) || !empty($email) || !empty($upswd1) || !empty($upswd2) )
{

$host = "localhost";
$dbusername = "shab";
$dbpassword = "";
$dbname = "project";


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $username = $_POST['username'];
    $password =  $_POST['password'];
  
    
  
        $query = "SELECT * FROM register WHERE uname1='$username' AND upswd1='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
          header('location: home1.php');
        }else {
            echo "user not found";
        }
    
    }
} else {
 echo "All field are required";
 die();
}
?>