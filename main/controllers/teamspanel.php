<?php

    include(ROOT_PATH . '/main/database/db.php');

    function dd($users) // to be deleted
    {
        echo '<pre>', print_r($users,true), '</pre>';
        exit();
    }

    $table = '';

    // adding teams

    if (isset($_POST['add-teams'])) {

        // setting value for $table
        if($_POST['sports'] === 'football'){
            $table = 'footballpanel';
        } elseif($_POST['sports'] === 'basketball'){
            $table = 'basketballpanel';
        } elseif($_POST['sports'] === 'vollleyball'){
            $table = 'volleyballpanel';
        } elseif($_POST['sports'] === 'cricket'){
            $table = 'cricketpanel';
        } elseif($_POST['sports'] === 'badminton'){
            $table = 'badmintonpanel';
        } elseif($_POST['sports'] === 'tabletennis'){
            $table = 'tabletennispanel';
        } elseif($_POST['sports'] === 'chess'){
            $table = 'chesspanel';
        } else {
            $table = '';
        }


        if ($_POST['sports'] === 'football' || $_POST['sports'] === 'basketball' || 
            $_POST['sports'] === 'volleyball' || $_POST['sports'] === 'cricket' ) 
        {

            $playersname = $_POST['playersname'];
            $positions = $_POST['positions'];
            $jerseynumbers = $_POST['jerseynumbers'];
            $extras = $_POST['extras'];


            unset($_POST['sports']);
            unset($_POST['playersname']);
            unset($_POST['positions']);
            unset($_POST['jerseynumbers']);
            unset($_POST['extras']);
            unset($_POST['add-teams']);

            $_POST['playername'] = "";
            $_POST['position'] = "";
            $_POST['jerseynumber'] = "";
            $_POST['extra'] = "";
            

            for($i=0; $i<count($playersname); $i++){
                $_POST['playername'] = $playersname[$i];
                $_POST['position'] = $positions[$i];
                $_POST['jerseynumber'] = $jerseynumbers[$i];
                $_POST['extra'] = $extras[$i];

                $teams_id = create($table, $_POST);
            }

            header('location: ' . BASE_URL . '/main/admin/teams/index.php');
            exit();

        }

        if ($_POST['sports'] === 'badminton' || $_POST['sports'] === 'tabeltennis')
        {
            if($_POST['grouped'] === 'team'){

                $playersname = $_POST['playersname'];

                unset($_POST['sports']);
                unset($_POST['playersname']);
                unset($_POST['add-teams']);

                $_POST['playername'] = "";
                $_POST['unid'] = time();

                for($i=0; $i<2; $i++){
                    $_POST['playername'] = $playersname[$i];
    
                    $teams_id = create($table, $_POST);
                }

                header('location: ' . BASE_URL . '/main/admin/teams/index.php');
                exit();

            }

            if($_POST['grouped'] === 'solo'){

                $playersname = $_POST['playersname'];
    
                unset($_POST['sports']);
                unset($_POST['playersname']);
                unset($_POST['add-teams']);

                $_POST['playername'] = $playersname[2];
                $_POST['unid'] = time();
    
                $teams_id = create($table, $_POST);

                header('location: ' . BASE_URL . '/main/admin/teams/index.php');
                exit();

            }

        }

        if ($_POST['sports'] === 'chess')
        {
            unset($_POST['sports']);
            unset($_POST['add-teams']);

            $teams_id = create($table, $_POST);

            header('location: ' . BASE_URL . '/main/admin/teams/index.php');
            exit(); 
        }

    }

?>