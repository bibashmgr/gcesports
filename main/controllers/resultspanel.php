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
function selectByAsc($table) // second parameter is optional
{
    global $conn;
    
    $sql = "SELECT * FROM $table ORDER BY date ASC, time ASC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
    
}

$currentDate = getdate();

$prerecords = selectByAsc($prevtable);

// returns already held matches
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


// editing results

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = selectOne($prestable, ['id' => $id]);

    $id = $result['id'];
    $title = $result['title'];
    $info = $result['info'];
}

if (isset($_POST['update-results'])) {

    $id = $_POST['id'];
        
    unset($_POST['update-results'], $_POST['id']);

    $results_id = update($prestable, $id, $_POST);

    header('location: ' . BASE_URL . '/main/admin/results/index.php');

    exit();

}

// deleting fixtures

if(isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $count = delete($prestable, $id);

    header('location: ' . BASE_URL . '/main/admin/results/index.php');
    exit();

}

?>