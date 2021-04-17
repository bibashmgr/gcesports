<?php include('../../path.php') ?>

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
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header: nav-bar -->

    <?php include(ROOT_PATH . '/src/main/includes/header.php') ?>

    <!-- section: login -->
    <section class="section-container">
        <div class="login-container">
            <div class="login-box">
                <div class="login-image">
                </div>
                <h1>Welcome</h1>
                <form action="./controllers/validation.php" method="POST" id="form" class="form">
                    <div class="form-control">
                        <label for="email">Email:</label>
                        <input id="email" type="text" name="user-email" placeholder="Enter Email" autocomplete="off" />
                        <small>Error message</small>
                        
                    </div>
                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input id="password" type="password" name="user-password" placeholder="Enter Password" autocomplete="off" />
                        <small>Error message</small>
                    </div>
                    <input type="submit" name="login-btn" value="Login" />
                </form>
            </div>
        </div>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/src/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="../javascript/login.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>