<?php

include(ROOT_PATH . '/main/database/db.php');

function dd($users) // to be deleted
{
    echo '<pre>', print_r($users,true), '</pre>';
    exit();
}

// variables
$table = 'fixturespanel';

$id = '';
$date = '';
$time = '';
$title = '';
$info = '';

$errors = array();

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

$fixtures = selectByAsc($table);

//adding fixtures

if(isset($_POST['add-fixtures'])) {

    unset($_POST['add-fixtures']);
    
    $fixtures_id = create($table, $_POST);

    header('location: ' . BASE_URL . '/main/admin/fixtures/index.php');

    exit();
    
}

// editing fixtures

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $fixture = selectOne($table, ['id' => $id]);

    $id = $fixture['id'];
    $date = $fixture['date'];
    $time = $fixture['time'];
    $title = $fixture['title'];
    $info = $fixture['info'];
}

if (isset($_POST['edit-fixtures'])) {

    $id = $_POST['id'];
        
    unset($_POST['edit-fixtures'], $_POST['id']);

    $fixtures_id = update($table, $id, $_POST);

    header('location: ' . BASE_URL . '/main/admin/fixtures/index.php');

    exit();

}

// deleting fixtures

if(isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $count = delete($table, $id);

    header('location: ' . BASE_URL . '/main/admin/fixtures/index.php');
    exit();

}