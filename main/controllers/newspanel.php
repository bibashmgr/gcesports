<?php

    include(ROOT_PATH . '/main/database/db.php');

    function dd($users) // to be deleted
    {
        echo '<pre>', print_r($users,true), '</pre>';
        exit();
    }

    $table = 'newspanel';

    $id = '';
    $title = '';
    $body = '';
    $image = '';

    $news = selectAll($table);
    
    // adding news

    if (isset($_POST['add-news'])) {

        $image_name = time() . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/media/news/' . $image_name;

        $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

        $_POST['image'] = $image_name;

        unset($_POST['add-news']);

        $news_id = create($table, $_POST);

        header('location: ' . BASE_URL . '/main/admin/news/index.php');
        exit();

    }

    // editing news

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $new = selectOne($table, ['id' => $id]);

        $id = $new['id'];
        $title = $new['title'];
        $body = $new['body'];
        $image = $new['image'];
    }

    if (isset($_POST['edit-news'])) {

        $id = $_POST['id'];

        unset($_POST['edit-news'], $_POST['id']);

        $news_id = update($table, $id, $_POST);

        header('location: ' . BASE_URL . '/main/admin/news/index.php');
        exit();
    }

    // deleting news

    if(isset($_GET['del_id'])) {

        $id = $_GET['del_id'];
        $count = delete($table, $id);

        header('location: ' . BASE_URL . '/main/admin/news/index.php');
        exit();
    
    }

    // for news-post

    if(isset($_GET['page_id'])) {
        $page_id = $_GET['page_id'];
    }


?>