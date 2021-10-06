<?php

session_start();

include('./path.php');

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

    <title>Fixtures Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/fixtures.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/footer.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header: nav-bar -->

    <?php include(ROOT_PATH . '/main/includes/header.php'); ?>

    <!-- section: fixtures-container -->

    <section class="fixtures-container">
        <h1>UPCOMING FIXTURES</h1>
        <table>
            <thead>
                <th>Match Details</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Learn More</th>
            </thead>
            <tbody>
                <?php $typesof = array(
                    'football', 'basketball', 'volleyball', 'cricket', 'badminton', 'tabletennis', 'chess'
                ); ?>

                <?php for ($i = 0; $i < 7; $i++) : ?>
                    <?php
                    $currentDate = getdate();
                    ?>
                    <?php foreach ($fixtures as $key => $fixture) : ?>
                        <?php $pastdate = strtotime($fixture['date']); ?>
                        <?php if ($fixture['sports'] === $typesof[$i] && $currentDate[0] < ($pastdate + 86400)) : ?>
                            <tr>
                                <td style="text-transform: uppercase;" colspan="5">
                                    <?php
                                    echo $fixture['sports'];
                                    break;
                                    ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php foreach ($fixtures as $key => $fixture) : ?>
                        <?php $pastdate = strtotime($fixture['date']); ?>
                        <?php if ($fixture['sports'] === $typesof[$i] && $currentDate[0] < ($pastdate + 86400)) : ?>
                            <tr>
                                <td>
                                    <?php
                                    echo date('d', strtotime($fixture['date'])) . '.' . date('m', strtotime($fixture['date'])) . '.' . date('Y', strtotime($fixture['date'])) .
                                        ' - ' . date('H', strtotime($fixture['time'])) . ':' . date('i', strtotime($fixture['time']));
                                    ?>
                                </td>
                                <td style="text-transform: capitalize;"><?php echo $fixture['firstname'] . ' ' . $fixture['gender'] . ' (' . $fixture['firstfaculty'] . ')'; ?></td>
                                <td>VS</td>
                                <td style="text-transform: capitalize;"><?php echo $fixture['secondname']  . ' ' . $fixture['gender'] . ' (' . $fixture['secondfaculty'] . ')'; ?></td>
                                <td><a href="#" class="info-link">View Info</a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                <?php endfor; ?>
            </tbody>
        </table>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/fixtures.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>