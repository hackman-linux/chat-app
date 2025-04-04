<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    //let's check users entered email and password matched the data in the database
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0 ){//if users credential matched
        $row = mysqli_fetch_object($sql);
        $_SESSION['unique_id'] = $row->unique_id; //using this session we used user unique_id in other php file
        echo "success";
    }else{
        echo "Error Incorrect Email or Password";
    }
}else{
    echo "All input fields are required";
}

?>