<?php
session_start();
include_once "config.php"; 
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    //let's check users entered email & password matched to database tables
    $sql = mysqli_query($conn, "SELECT * FROM  users WHERE email = '{$email}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
    }else{
        echo "Credentials are wrong. Try again!";
    }

}else{
    echo "All input fields are required!";
}