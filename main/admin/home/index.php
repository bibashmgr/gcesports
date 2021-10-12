<?php

session_start();

include('../../../path.php');

include(ROOT_PATH . '/main/controllers/homepanel.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Home Panel</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="../css/panelheader.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/adminpanel.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header: nav-bar & sidebar -->

    <?php include(ROOT_PATH . '/main/admin/includes/header.php') ?>

    <!-- section: players-panel -->

    <section class="players-table">
        <h1>HOME | TOP PLAYERS</h1>
        <table>
            <thead>
                <th>Id</th>
                <th>Sports</th>
                <th>Name</th>
                <th>Points</th>
                <th colspan="3">Actions</th>
            </thead>
            <tbody>
                <?php foreach ($players as $key => $player) : ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td style="text-transform: capitalize;"><?php echo $player['sports']; ?></td>
                        <td><?php echo $player['playername']; ?></td>
                        <td><?php echo $player['points']; ?></td>
                        <td><a href="./edit.php?id=<?php echo $player['id']; ?>" style="color: #ffcd02;">Edit</a></td>
                        <td></td>
                        <td><a href="./index.php?del_id=<?php echo $player['id']; ?>" style="color: red;">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <a href="./create.php">ADD PLAYER</a>
        </div>
    </section>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>