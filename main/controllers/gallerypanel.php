<?php

    include(ROOT_PATH . '/main/database/db.php');

    $table = 'gallerypanel';

    $id = '';
    $name = '';
    $image = '';

    $gallerys = selectAll($table);
    
    // adding gallery

    if (isset($_POST['add-gallery'])) {

        $image_name = time() . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/media/gallery/' . $image_name;

        $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

        $_POST['image'] = $image_name;

        unset($_POST['add-gallery']);

        $gallery_id = create($table, $_POST);

        header('location: ' . BASE_URL . '/main/admin/gallery/index.php');
        exit();

    }

    // editing gallery

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $gallery = selectOne($table, ['id' => $id]);

        $id = $gallery['id'];
        $name = $gallery['name'];
        $image = $gallery['image'];
    }

    if (isset($_POST['edit-gallery'])) {

        $id = $_POST['id'];

        unset($_POST['edit-gallery'], $_POST['id']);

        $gallery_id = update($table, $id, $_POST);

        header('location: ' . BASE_URL . '/main/admin/gallery/index.php');
        exit();
    }

    // deleting gallery

    if(isset($_GET['del_id'])) {

        $id = $_GET['del_id'];
        $count = delete($table, $id);

        header('location: ' . BASE_URL . '/main/admin/gallery/index.php');
        exit();
    
    }

?>