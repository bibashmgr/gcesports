<?php

    include(ROOT_PATH . '/main/database/db.php');

    $errors = array();

    $adminEmail = '';
    $password = '';

    // checks errors
    function validateLogin($user)
    {
        
        $errors = array();

        if(empty($user['admin'])) {
            array_push($errors, 'Email is required');
        }

        if(empty($user['password'])) {
            array_push($errors, 'Password is required');
        }

        return $errors;

    }


    if(isset($_POST['login-btn'])) {

        $errors = validateLogin($_POST);

        if(count($errors) === 0){

            unset($_POST['comment-btn']);

            $user = selectOne('adminlogin', ['admin' => $_POST['admin']]);

            if(!empty($user) && ($user['password'] === $_POST['password'])) {

                $_SESSION['name'] = $user['name'];
                $_SESSION['admin'] = $user['admin'];

                header('location:' . BASE_URL . '/profile.php');
                exit();

            } else {

                $adminEmail = $_POST['admin'];
                $password = $_POST['password'];

                array_push($errors, "Failed to login");

            }
            
        }
        
    }
    
?>