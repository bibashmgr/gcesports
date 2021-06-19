<?php 

    session_start();

    include('../../../path.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Add Teams</title>

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

    <!-- section: news-panel-form -->

    <section class="teams-panel-form">
        <h1>Select Sports:</h1>
        <ul>
            <li><a href="./football.php"><img src="../../../media/teams/football.png" alt="football"></a></li>
            <li><a href="./basketball.php"><img src="../../../media/teams/basketball.png" alt="basketball"></a></li>
            <li><a href="./volleyball.php"><img src="../../../media/teams/volleyball.png" alt="volleyball"></a></li>
            <li><a href="./cricket.php"><img src="../../../media/teams/cricket.png" alt="cricket"></a></li>
            <li><a href="./badminton.php"><img src="../../../media/teams/badminton.png" alt="badminton"></a></li>
            <li><a href="./tabletennis.php"><img src="../../../media/teams/tabletennis.png" alt="tabletennis"></a></li>
            <li><a href="./chess.php"><img src="../../../media/teams/chess.png" alt="chess"></a></li>
        </ul>
        <div>
            <a href="./index.php">MANAGE TEAMS</a>
        </div>
    </section>
    
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>