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

    <title>Add Player</title>

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

    <!-- section: players-form -->

    <section class="players-form">
        <h1>Add Player</h1>
        <form action="create.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="sports">Sports:</label><br />
                <select name="sports" id="sports" required>
                    <option hidden></option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="cricket">Cricket</option>
                </select>
            </div>
            <div>
                <label for="playername">Name:</label><br />
                <input type="text" name="playername" id="playername" required />
            </div>
            <div>
                <label for="image">Images:</label><br />
                <input type="file" id="image" name="image" required />
            </div>
            <div>
                <label for="points">Points:</label><br />
                <input type="text" id="points" name="points" required />
            </div>
            <div>
                <input type="submit" name="add-player" id="submit-btn" value="ADD PLAYER">
            </div>
        </form>
        <div>
            <a href="./index.php">MANAGE PLAYERS</a>
        </div>
    </section>


    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>