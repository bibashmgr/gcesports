<?php

    session_start();

    // connecting to mysql server
    $con = mysqli_connect('localhost', 'root');

    if($con){
        echo "CONNECTION SUCCESSFUL";
    }else {
        echo "CONNECTION FAILED";
    }

    // connecting to database
    mysqli_select_db($con, 'gcesports');

    $email = $_POST['user-email'];
    $password = $_POST['user-password'];

    $values = "SELECT * FROM userlogin where Email = '$email' && Password = '$password'";

    $result = mysqli_query($con, $values);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['login-email'] = $email;
        header('location:profile.php');
    } else {
        header('location:login.php');
    }
?>