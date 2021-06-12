<?php 

    session_start();

    include('./path.php');

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

    <title>Results Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/results.css?v=<?php echo time(); ?>" />
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

    <!-- section: results-container -->

    <section class="results-container">
        <h1>RESULTS</h1>
        <table>
            <thead>
                <th>Match Details</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Learn More</th>
            </thead>
            <tbody>
                
                <?php $typesof = array(
                    'football', 'basketball', 'volleyball', 'cricket', 'badminton', 'tabletennis', 'chess'
                    );
                ?>

                <?php for($i=0; $i<7; $i++): ?>
                    <tr>
                        <?php foreach ($results as $key => $result): ?>
                            <?php if($result['sports'] === $typesof[$i] && $result['firstscore'] <> '?' && $result['secondscore'] <> '?' ): ?>
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
                        <?php if($result['sports'] === $typesof[$i] && $result['firstscore'] <> '?' && $result['secondscore'] <> '?'): ?>
                            <tr>
                                <td>
                                    <?php 
                                        echo date('d', strtotime($result['date'])) . '.' . date('m', strtotime($result['date'])) . '.' . date('Y', strtotime($result['date'])) . 
                                        ' - ' . date('H', strtotime($result['time'])) . ':' . date('i', strtotime($result['time']));
                                    ?>
                                </td>
                                <td><?php echo $result['firstname'] . ' ' . $result['gender'] . ' (' . $result['firstfaculty'] . ')'; ?></>
                                <td><?php echo $result['firstscore'];?></td>
                                <td>-</td>
                                <td><?php echo $result['secondscore'];?></td>
                                <td><?php echo $result['secondname']  . ' ' . $result['gender'] . ' (' . $result['secondfaculty'] . ')'; ?></td>
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
    <script src="./src/script/results.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>