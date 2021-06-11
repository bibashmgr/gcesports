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

    <title>Add Fixtures</title>

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

    <!-- section: news-panel-form -->

    <section class="fixtures-panel-form">
        <h1>Add Fixtures</h1>
        <form action="create.php" method="POST">
            <div>
                <label for="sports">Sports:</label><br/>
                <select name="sports" id="sports" required>
                    <option></option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="cricket">Cricket</option>
                    <option value="badminton">Badminton</option>
                    <option value="tabletennis">Table Tennis</option>
                    <option value="chess">Chess</option>
                </select>
            </div>
            <div>
                <label for="gender">Gender:</label><br/>
                <select name="gender" id="gender" required>
                    <option></option>
                    <option value="Boys">Boys</option>
                    <option value="Girls">Girls</option>
                </select>
            </div>
            <div>
                <label for="firstteam">First Team:</label><br/>
                <select name="firstname" id="firstname" required>
                    <option></option>
                    <option value="First Year">First Year</option>
                    <option value="Second Year">Second Year</option>
                    <option value="Third Year">Third Year</option>
                    <option value="Fourth Year">Fourth Year</option>
                    <option value="Staffs">Staffs</option>
                </select>
                <select name="firstfaculty" id="firstfaculty" required>
                    <option></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>
            <div>
                <label for="secondteam">Second Team:</label><br/>
                <select name="secondname" id="secondname" required>
                    <option></option>
                    <option value="First Year">First Year</option>
                    <option value="Second Year">Second Year</option>
                    <option value="Third Year">Third Year</option>
                    <option value="Fourth Year">Fourth Year</option>
                    <option value="Staffs">Staffs</option>
                </select>
                <select name="secondfaculty" id="secondfaculty" required>
                    <option></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>
            <div>
                <label for="date">Date:</label><br/>
                <input type="date" id="date" name="date" value="<?php echo $date;?>" required />
            </div>
            <div>
                <label for="time">Time:</label><br/>
                <input type="time" id="time" name="time" value="<?php echo $time;?>" required />
            </div>
            <div>
                <label for="title">Title:</label><br/>
                <input type="text" id="title" name="title" value="<?php echo $title;?>" required />
            </div>
            <div>
                <label for="info">Info:</label><br/>
                <textarea id="info" name="info" rows="5" style="resize: none;" required><?php echo $info; ?></textarea>
            </div>
            <div>
                <input type="submit" name="add-fixtures" id="submit-btn" value="ADD FIXTURES" />
            </div>
        </form>
        <div>
            <a href="./index.php">MANAGE FIXTURES</a>
        </div>
    </section>
    
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>