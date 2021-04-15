<?php

    session_start();
    
    require('../db/connect.php');

    $email = $_POST['user-email'];
    $password = $_POST['user-password'];

    $values = "SELECT * FROM userlogin where Email = '$email' && Password = '$password'";

    $result = mysqli_query($conn, $values);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['login-email'] = $email;
        header('location: ../profile.php');
    } else {
        header('location: ../login.php');
    } 

?>