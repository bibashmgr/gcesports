<?php

    include('../../../path.php');

    include(ROOT_PATH . '/src/main/database/db.php');


    if(isset($_POST['comment-btn'])) {

        $errors = array();

        if(empty($_POST['email'])) {
            array_push($errors, 'Email cannot be blanked');
        }

        if(empty($_POST['comments'])) {
            array_push($errors, 'Comments cannot be blanked');
        }

        if(count($errors) === 0){

            unset($_POST['comment-btn']);

            $feedback_id =  create('feedback', $_POST);
            $feedback = selectOne('feedback', ['id' => $feedback_id]);
            
        }

    }

    // after submiting , page wiil be redirected to that page from where the form(i.e comment) is submitted
    header("Location: " . $_SERVER["HTTP_REFERER"]);

?>