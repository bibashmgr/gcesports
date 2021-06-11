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
$sports ='';
$firstname = '';
$firstfaculty = '';
$firstgender = '';
$secondname = '';
$secondfaculty = '';
$secondgender = '';
$date = '';
$time = '';
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

// checks errors
function validateDatas($datas)
{
    
    $errors = array();

    if($datas['sports'] === 'none') {
        array_push($errors, '*Please, select sport');
    }

    if($datas['firstname'] === 'none' || $datas['secondname'] === 'none') {
        array_push($errors, '*Please, select team');
    }

    if($datas['firstfaculty'] === 'none' || $datas['secondfaculty'] === 'none') {
        array_push($errors, '*Please, select faculty');
    }

    if($datas['firstgender'] === 'none' || $datas['secondgender'] === 'none'){
        array_push($errors, '*Please, select gender');
    }

    if($datas['firstname'] === $datas['secondname'] || $datas['firstfacullty'] === $datas['secondfaculty']) {
        array_push($errors, '*Please, check your form');
    }

    if($datas['firstgender'] != $datas['secondgender']) {
        array_push($errors, '*Sorry, cannot create a match between boys and girls');
    }

    if(empty($datas['date'])) {
        array_push($errors, '*Date field cannot be empty');
    }

    if(empty($datas['time'])) {
        array_push($errors, '*Time field cannot be empty');
    }

    if(empty($datas['info'])) {
        array_push($errors, '*Info field cannot be empty');
    }

    return $errors;

}

//adding fixtures

if(isset($_POST['add-fixtures'])) {

    $errors = validateDatas($_POST);

    if(count($errors) === 0){

        unset($_POST['add-fixtures']);

        $fixtures_id = create($table, $_POST);

        header('location: ' . BASE_URL . '/main/admin/fixtures/index.php');

        exit();
        
    } else {

        $sports = $_POST['sports'];
        $firstname = $_POST['firstname'];
        $firstfaculty = $_POST['firstfaculty'];
        $firstgender = $_POST['firstgender'];
        $secondname = $_POST['secondname'];
        $secondfaculty = $_POST['secondfaculty'];
        $secondgender = $_POST['secondgender'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $info = $_POST['info'];

        array_push($errors, "*Failed to add!");

    }
    
}

// editing fixtures

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $fixture = selectOne($table, ['id' => $id]);

    $id = $fixture['id'];
    $date = $fixture['date'];
    $time = $fixture['time'];
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