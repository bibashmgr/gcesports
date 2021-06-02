<?php 

    session_start();

    include('./path.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Teams/Football</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/teams.css?v=<?php echo time(); ?>" />
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

    <!-- section: team-lists-->

    <?php 
    
    if($_GET['type'] == 'football'){

        include(ROOT_PATH . '/main/includes/football.php');

    } elseif($_GET['type'] == 'basketball') {

        include(ROOT_PATH . '/main/includes/basketball.php');

    } elseif($_GET['type'] == 'volleyball') {

        include(ROOT_PATH . '/main/includes/volleyball.php');

    } elseif($_GET['type'] == 'cricket') {

        include(ROOT_PATH . '/main/includes/cricket.php');

    } elseif($_GET['type'] == 'badminton') {

        include(ROOT_PATH . '/main/includes/badminton.php');

    } elseif($_GET['type'] == 'table-tennis') {

        include(ROOT_PATH . '/main/includes/tabletennis.php');

    } elseif($_GET['type'] == 'chess') {

        include(ROOT_PATH . '/main/includes/chess.php');

    } 
    
    ?>
    
    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/teams.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>