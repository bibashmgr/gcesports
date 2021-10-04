<?php

    include(ROOT_PATH . '/main/database/db.php');
    
    //variables
    $table = '';
    
    $teamname = '';
    $teamgender = '';
    $teamfaculty = '';

    // making arrays
    $tables = array("footballpanel","basketballpanel","volleyballpanel","cricketpanel","badmintonpanel","tabletennispanel","chesspanel");
    $conditions = array();
    $teamnames = array("first year", "second year", "third year", "fourth year");
    $teamgenders = array("boys", "girls");
    $teamfacultys = array("COM", "SOF");

    
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
            
            unset($_POST['add-teams']);

            $teams_id = create($table, $_POST);

            header('location: ' . BASE_URL . '/main/admin/teams/index.php');
            exit(); 
        }

    }

    //deleting teams

    if(isset($_GET['s'])) {

        $sports = $_GET['s'];

        $cdtns = array();
        $cdtns['teamname'] = $_GET['tn'];
        $cdtns['teamgender'] = $_GET['tg'];
        $cdtns['teamfaculty'] = $_GET['tf'];

        if($sports === 'football'){
            $table = 'footballpanel';
        } elseif($sports === 'basketball'){
            $table = 'basketballpanel';
        } elseif($sports === 'vollleyball'){
            $table = 'volleyballpanel';
        } elseif($sports === 'cricket'){
            $table = 'cricketpanel';
        } elseif($sports === 'badminton'){
            $table = 'badmintonpanel';
        } elseif($sports === 'tabletennis'){
            $table = 'tabletennispanel';
        } elseif($sports === 'chess'){
            $table = 'chesspanel';
        } else {
            $table = '';
        }

        $teams_id = selectAll($table, $cdtns);

        foreach($teams_id as $key => $team_id){
            $count = delete($table, $team_id['id']);
        }


        header('location: ' . BASE_URL . '/main/admin/teams/index.php');
        exit();

    }

?>