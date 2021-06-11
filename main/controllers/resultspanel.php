<?php

include(ROOT_PATH . '/main/database/db.php');

function dd($users) // to be deleted
{
    echo '<pre>', print_r($users,true), '</pre>';
    // exit();
}

// variables
$prevtable = 'fixturespanel';
$prestable = 'resultspanel';

// function to order the records based on date and time
function selectExpired($table) // second parameter is optional
{
    global $conn;
    
    $sql = "SELECT * FROM $table ORDER BY date ASC, time ASC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
    
}

$currentDate = getdate();

$prerecords = selectExpired($prevtable);


foreach($prerecords as $key => $prerecord)
{

    $date = strtotime($prerecord['date']);
    
    if($currentDate[0] > ($date + 86400)){

        $prerecord['firstscore'] = '?';
        $prerecord['secondscore'] = '?';

        $results_id = create($prestable, $prerecord);
    }

}

$results = selectAll($prestable);

?>