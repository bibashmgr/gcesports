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

    <title>Teams Page</title>

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

    <!-- section: sports-lists -->

    <h1 class="section-heading">TEAMS</h1>
    <section class="sports-list">
        <a href="./football.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/football.png" alt="football">
            </div>
            
            <div class="item-title">FOOTBALL</div>
        </a>

        <a href="./basketball.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/basketball.png" alt="basketball">
            </div>
            
            <div class="item-title">BASKETBALL</div>
        </a>

        <a href="./volleyball.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/volleyball.png" alt="volleyball">
            </div>
            
            <div class="item-title">VOLLEYBALL</div>
        </a>

        <a href="./cricket.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/cricket.png" alt="cricket">
            </div>
            
            <div class="item-title">CRICKET</div>
        </a>

        <a href="./badminton.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/badminton.png" alt="badminton">
            </div>
            
            <div class="item-title">BADMINTON</div>
        </a>

        <a href="./tabletennis.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/tabletennis.png" alt="table-tennis">
            </div>
            
            <div class="item-title">TABLE TENNIS</div>
        </a>

        <a href="./chess.php" class="sports-item">
            <div class="item-image">
                <img src="./media/teams/chess.png" alt="chess">
            </div>
            
            <div class="item-title">CHESS</div>
        </a>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/teams.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>