<?php

    include('../../path.php');

    session_start();

    unset($_SESSION['admin']);
    unset($_SESSION['password']);

    session_destroy();

    header('location:' . BASE_URL . '/login.php');
?>
