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

    <title>News Panel</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="../css/panelheader.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/newspanel.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header: nav-bar & sidebar -->

    <?php include(ROOT_PATH . '/main/admin/includes/header.php') ?>

    <!-- section: news-panel -->

    <section class="news-panel-table">
        <h1>News Panel</h1>
        <table>
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
                <th colspan="3">Actions</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nepal won against India</td>
                    <td>2021/02/21</td>
                    <td><a href="./edit.php" style="color: #ffcd02;">Edit</a></td>
                    <td><a href="#" style="color: red;">Delete</a></td>
                    <td><a href="#" style="color: #46b344;">Publish</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nepali Women Volleyball team qualified for Asian Volleyball Cup</td>
                    <td>2021/02/21</td>
                    <td><a href="./edit.php" style="color: #ffcd02;">Edit</a></td>
                    <td><a href="#" style="color: red;">Delete</a></td>
                    <td><a href="#" style="color: #46b344;">Publish</a></td>
                </tr>
            </tbody>
        </table>
        <div>
            <a href="./create.php">ADD NEWS</a>
        </div>
    </section>
    
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>