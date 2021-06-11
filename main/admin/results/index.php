<?php 

    session_start();

    include('../../../path.php');

    include(ROOT_PATH . '/main/controllers/resultspanel.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Results Panel</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="../css/panelheader.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/resultspanel.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header: nav-bar & sidebar -->

    <?php include(ROOT_PATH . '/main/admin/includes/header.php') ?>


    <!-- section: fixtures-panel-table -->
    <section class="results-panel-table">
        <h1>Results Panel</h1>
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
                    );
                ?>

                <tr>
                    <td colspan="8" style="font-weight: 700; font-size:16px;">HELD MATCHES:</td>
                </tr>

                <?php for($i=0; $i<7; $i++): ?>
                    <?php $counter = 1;?>
                    <tr>
                        <?php foreach ($results as $key => $result): ?>
                            <?php if($result['sports'] == $typesof[$i] && $result['firstscore'] <> '?' && $result['secondscore'] <> '?' ): ?>
                                <td style="text-transform: uppercase; font-size:15px;" colspan="8">
                                    <?php 
                                        echo $result['sports'];
                                        break;
                                        ?>
                                </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>

                    <?php foreach ($results as $key => $result): ?>
                        <?php if($result['sports'] == $typesof[$i] && $result['firstscore'] <> '?' && $result['secondscore'] <> '?'): ?>
                            <tr>
                                <td><?php echo $counter; ?></td>
                                <td><?php echo $result['firstname'] . ' ' . $result['gender'] . ' (' . $result['firstfaculty'] . ')'; ?></td>
                                <td><?php echo $result['firstscore'] . ' - ' . $result['secondscore'];?></td>
                                <td><?php echo $result['secondname']  . ' ' . $result['gender'] . ' (' . $result['secondfaculty'] . ')'; ?></td>
                                <td><?php echo $result['date'] . '.' . $result['time']; ?></td>
                                <td><a href="./edit.php?id=<?php echo $result['id']; ?>" style="color: #ffcd02;">Edit</a></td>
                                <td><a href="./index.php?del_id=<?php echo $result['id']; ?>" style="color: red;">Delete</a></td>
                            </tr>
                            <?php $counter++ ;?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                <?php endfor; ?>
                
                <tr>
                    <td colspan="8" style="font-weight: 700; font-size:16px;">PENDING MATCHES:</td>
                </tr>

                <?php for($i=0; $i<7; $i++): ?>
                    <?php $counter = 1;?>
                    <tr>
                        <?php foreach ($results as $key => $result): ?>
                            <?php if($result['sports'] == $typesof[$i] && $result['firstscore'] = '?'): ?>
                                <td style="text-transform: uppercase; font-size:15px;" colspan="8">
                                    <?php 
                                        echo $result['sports'];
                                        break;
                                        ?>
                                </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>

                    <?php foreach ($results as $key => $result): ?>
                        <?php if($result['sports'] == $typesof[$i] && $result['firstscore'] = '?'): ?>
                            <tr>
                                <td><?php echo $counter; ?></td>
                                <td><?php echo $result['firstname'] . ' ' . $result['gender'] . ' (' . $result['firstfaculty'] . ')'; ?></td>
                                <td><?php echo $result['firstscore'] . ' - ' . $result['secondscore'];?></td>
                                <td><?php echo $result['secondname']  . ' ' . $result['gender'] . ' (' . $result['secondfaculty'] . ')'; ?></td>
                                <td><?php echo $result['date'] . '.' . $result['time']; ?></td>
                                <td><a href="./edit.php?id=<?php echo $result['id']; ?>" style="color: #ffcd02;">Edit</a></td>
                                <td><a href="./index.php?del_id=<?php echo $result['id']; ?>" style="color: red;">Delete</a></td>
                            </tr>
                            <?php $counter++ ;?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                <?php endfor; ?>

            </tbody>
        </table>
    </section>

    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>