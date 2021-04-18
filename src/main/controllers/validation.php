<?php
    
    include('../../../path.php');

    include(ROOT_PATH . '/src/main/database/db.php');

    global $conn;

    if(isset($_POST['login-btn'])) {

        $errors = array();

        if(empty($_POST['admin-email'])) {
            array_push($errors, 'Email cannot be blanked');
        }

        if(empty($_POST['password'])) {
            array_push($errors, 'Password cannot be blanked');
        }

        if(count($errors) === 0){

            unset($_POST['login-btn']);
            
        }
        
    }

    function dd($users) // will be deleted
    {
        echo '<pre>', print_r($users, true), '</pre>';
    }
    
?>