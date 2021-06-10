<?php 

    session_start();

    include('../../../path.php');

    include(ROOT_PATH . '/main/controllers/fixturespanel.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Fixtures Panel</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="../css/panelheader.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/fixturespanel.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header: nav-bar & sidebar -->

    <?php include(ROOT_PATH . '/main/admin/includes/header.php') ?>

    <section class="fixtures-panel-table">
        <h1>Fixtures Panel</h1>
        <table>
            <thead>
                <th>Id</th>
                <th>First Team</th>
                <th></th>
                <th>Second Team</th>
                <th>Date</>
                <th colspan="2">Actions</th>
            </thead>
            <tbody>

                <?php $typesof = array(
                    'football', 'basketball', 'volleyball', 'cricket', 'badminton', 'tabletennis', 'chess'
                ); ?>

                <?php for($i=0; $i<7; $i++): ?>
                    <tr>
                        <?php foreach ($fixtures as $key => $fixture): ?>
                            <?php if($fixture['sports'] == $typesof[$i]): ?>
                                <td style="text-transform: uppercase; font-size:15px;" colspan="8">
                                    <?php 
                                        echo $fixture['sports'];
                                        break;
                                    ?>
                                </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>

                    <?php foreach ($fixtures as $key => $fixture): ?>
                        <?php if($fixture['sports'] == $typesof[$i]): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $fixture['firstname'] . ' ' . $fixture['firstgender'] . ' (' . $fixture['firstfaculty'] . ')'; ?></td>
                                <td>VS</td>
                                <td><?php echo $fixture['secondname']  . ' ' . $fixture['firstgender'] . ' (' . $fixture['firstfaculty'] . ')'; ?></td>
                                <td><?php echo $fixture['date'] . '.' .$fixture['time']; ?></td>
                                <td><a href="./edit.php?id=<?php echo $fixture['id']; ?>" style="color: #ffcd02;">Edit</a></td>
                                <td><a href="./index.php?del_id=<?php echo $fixture['id']; ?>" style="color: red;">Delete</a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                <?php endfor; ?>

            </tbody>
        </table>
        <div class="add-link">
            <a href="./create.php">ADD FIXTURES</a>
        </div>
    </section>

    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>