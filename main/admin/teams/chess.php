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

    <!-- section: teams-panel-form -->

    <section class="teams-panel-form">
        <h1>Add Teams</h1>
        <form action="chess.php" method="POST" name="teamform">
            <h3>Chess:</h3>
            <div>
                <input type="text" name="sports" id="sports" value="chess" hidden>
            </div>
            <div>
                <label for="teamname">Choose:</label><br/>
                <select name="teamname" id="teamname" required>
                    <option hidden></option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                    <option value="staffs">Staffs</option>
                </select>
                <select name="teamgender" id="teamgender" required>
                    <option hidden></option>
                    <option value="boys">Boys</option>
                    <option value="girls">Girls</option>
                </select>
                <select name="teamfaculty" id="teamfaculty" required>
                    <option hidden></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>
            </div>
            <div>
                <label for="solo">Enter Name:</label>
                <div>
                    <input type="text" name="playername" class="playersname" />
                </div>
            </div>
            <div>
                <input type="submit" name="add-teams" id="submit-btn" value="ADD TEAM">
            </div>
        </form>
        <div>
            <a href="./index.php">MANAGE TEAMS</a>
        </div>
    </section>
    
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>