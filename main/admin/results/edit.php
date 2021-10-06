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

    <title>Update Results</title>

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

    <!-- section: news-panel-form -->

    <section class="results-panel-form">
        <h1>Update Results</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <div>
                <span style="text-transform: capitalize;">
                    <?php echo $result['firstname'] . ' ' . $result['gender'] . ' (' . $result['firstfaculty'] . '):'; ?>
                </span>
                <input type="text" id="firstscore" name="firstscore" value="" required />
            </div>
            <div>
                <span style="text-transform: capitalize;">
                    <?php echo $result['secondname'] . ' ' . $result['gender'] . ' (' . $result['secondfaculty'] . '):'; ?>
                </span>
                <input type="text" id="secondscore" name="secondscore" value="" required />
            </div>
            <div>
                <label for="title">Title:</label><br />
                <input type="text" id="title" name="title" value="<?php echo $title; ?>" required />
            </div>
            <div>
                <label for="info">Info:</label><br />
                <textarea id="info" name="info" rows="5" style="resize: none;" required><?php echo $info; ?></textarea>
            </div>
            <div>
                <input type="submit" name="update-results" id="submit-btn" value="UPDATE RESULTS" />
            </div>
        </form>
        <div>
            <a href="./index.php">MANAGE RESULTS</a>
        </div>
    </section>


    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>