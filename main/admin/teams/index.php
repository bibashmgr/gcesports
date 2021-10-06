<?php

session_start();

include('../../../path.php');

include(ROOT_PATH . '/main/controllers/teamspanel.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Teams Panel</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="../css/panelheader.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/teamspanel.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header: nav-bar & sidebar -->

    <?php include(ROOT_PATH . '/main/admin/includes/header.php') ?>

    <!-- section: teams-panel -->

    <section class="teams-panel-table">
        <h1>Teams Panel</h1>
        <table>
            <thead>
                <th>Id</th>
                <th>Team name</th>
                <th>Actions</th>
            </thead>
            <tbody>

                <?php for ($i = 0; $i < 7; $i++) : ?>

                    <?php $records = selectAll($tables[$i]); ?>

                    <?php if (count($records) > 0) : ?>
                        <tr>
                            <td colspan="3" class="sports-title"><?php echo $records[0]['sports']; ?></td>
                        </tr>
                        <?php $sn = 1; ?>
                    <?php endif; ?>

                    <?php for ($j = 0; $j < 4; $j++) : ?>

                        <?php for ($k = 0; $k < 2; $k++) : ?>

                            <?php for ($l = 0; $l < 2; $l++) : ?>

                                <?php
                                $conditions['teamname'] = $teamnames[$j];
                                $conditions['teamgender'] = $teamgenders[$k];
                                $conditions['teamfaculty'] = $teamfacultys[$l];

                                $datas = selectOne($tables[$i], $conditions);
                                ?>

                                <?php if ($datas) : ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td style="text-transform: capitalize;" class="team-title"><?php echo $datas['teamname'] . ' ' . $datas['teamgender'] . ' (' . $datas['teamfaculty'] . ')'; ?></td>
                                        <td><a href="./delete.php?s=<?php echo $datas['sports']; ?>&tn=<?php echo $datas['teamname']; ?>&tg=<?php echo $datas['teamgender']; ?>&tf=<?php echo $datas['teamfaculty']; ?>" style="color: red;">Delete</a></>
                                    </tr>
                                    <?php $sn++; ?>
                                <?php endif; ?>

                            <?php endfor; ?>

                        <?php endfor; ?>

                    <?php endfor; ?>

                <?php endfor; ?>
            </tbody>
        </table>
        <div class="add-link">
            <a href="./create.php">ADD TEAMS</a>
        </div>
    </section>


    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>