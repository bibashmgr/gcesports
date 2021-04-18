<?php 

    include('./path.php');

    include(ROOT_PATH . '/main/controllers/validation.php');

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
    <link rel="stylesheet" href="./src/style/login.css?v=<?php echo time(); ?>" />
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

    <!-- section: login -->
    <section class="section-container">
        <div class="login-container">
            <div class="login-box">
                <div class="login-image">
                </div>
                <h1>Welcome</h1>
                <form action="./login.php" method="POST" id="form" class="form">
                    <div class="form-control">
                        <label for="admin">Email:</label>
                        <input id="admin" type="text" name="admin" placeholder="Enter Email" value="<?php echo $adminEmail; ?>" />
                        
                    </div>
                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input id="password" type="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>" />
                        <small>
                            <?php if(count($errors) > 0) :?>
                                <?php foreach ($errors as $error): ?>
                                    <div><?php echo $error; ?></div>
                                <?php endforeach ;?>
                            <?php endif ; ?>
                        </small>
                    </div>
                    <input type="submit" name="login-btn" value="Login" />
                </form>
            </div>
        </div>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/login.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>