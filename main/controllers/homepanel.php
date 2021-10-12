<?php
include(ROOT_PATH . '/main/database/db.php');

$table = 'players';

$id = '';
$sports = '';
$playername = '';
$image = '';
$points = '';

$players = selectAll($table);

// adding player

if (isset($_POST['add-player'])) {

    $image_name = time() . $_FILES['image']['name'];
    $destination = ROOT_PATH . '/media/players/' . $image_name;

    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

    $_POST['image'] = $image_name;

    unset($_POST['add-player']);

    $player_id = create($table, $_POST);

    header('location: ' . BASE_URL . '/main/admin/home/index.php');
    exit();
}

// editing player

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $player = selectOne($table, ['id' => $id]);

    $id = $player['id'];
    $sports = $player['sports'];
    $playername = $player['playername'];
    $image = $player['image'];
    $points = $player['points'];
}

if (isset($_POST['edit-player'])) {

    $id = $_POST['id'];

    $image_name = time() . $_FILES['image']['name'];
    $destination = ROOT_PATH . '/media/players/' . $image_name;

    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

    $_POST['image'] = $image_name;

    unset($_POST['edit-player'], $_POST['id']);

    $player_id = update($table, $id, $_POST);

    header('location: ' . BASE_URL . '/main/admin/home/index.php');
    exit();
}

// deleting news

if (isset($_GET['del_id'])) {

    $id = $_GET['del_id'];
    $count = delete($table, $id);

    header('location: ' . BASE_URL . '/main/admin/home/index.php');
    exit();
}
