<?php

    include(ROOT_PATH . '/main/database/db.php');

    function dd($users) // to be deleted
    {
        echo '<pre>', print_r($users,true), '</pre>';
        exit();
    }

    $table = 'footballpanel';

    // adding teams

    if (isset($_POST['add-teams'])) {

        $playersname = $_POST['playersname'];
        $positions = $_POST['positions'];
        $extras = $_POST['extras'];

        unset($_POST['playersname']);
        unset($_POST['positions']);
        unset($_POST['extras']);
        unset($_POST['add-teams']);

        $_POST['playername'] = "";
        $_POST['position'] = "";
        $_POST['extra'] = "";
        

        for($i=0; $i<count($playersname); $i++){
            $_POST['playername'] = $playersname[$i];
            $_POST['position'] = $positions[$i];
            $_POST['extra'] = $extras[$i];

            $teams_id = create($table, $_POST);
        }

        // header('location: ' . BASE_URL . '/main/admin/teams/index.php');
        // exit();

    }

?>