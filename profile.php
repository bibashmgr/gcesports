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

    <title>Login Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/profile.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/footer.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header: nav-bar -->

    <?php include(ROOT_PATH . '/main/includes/header.php') ?>

    <!-- section: user-profile -->

    <section class="container">
        <div class="profile-container">

            <div class="profile-pic-container">
                <img src="./media/profile-pic.svg" alt="profile-pic" id="profile-pic" />
            </div>

            <div class="heading-container">
                <span class="heading-span">Welcome,</span>
            </div>

            <div class="name-container">
                <span class="name-span">
                    <?php echo $_SESSION['name']; ?>
                <span>
            </div>

            <div class="email-container">
                <span class="email-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <span class="email-span">
                    <?php echo $_SESSION['admin']; ?>
                <span>
            </div>

            <div class="btn-container">
                <div class="logout-btn">
                    <a href="./main/controllers/logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <div class="admin-panel-btn">
                    <a href="./main/admin/home/index.php" title="Admin Panel"><i class="fas fa-user-cog"></i></a>
                </div>
            </div>

        </div>
    </section>
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>