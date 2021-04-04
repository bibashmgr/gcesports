<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Login Page</title>

    <link rel="stylesheet" href="../css/profile.css?v=<?php echo time(); ?>" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- 
        HEADER:
        Contains LOGO & NAV-BAR
    -->

    <header>
        <img class="logo" src="../../media/logo.png" alt="logo" />
        
        <nav>
            <ul class="nav-links">
                <li><a href="./index.php" class="navlink">Home</a></li>
                <li><a href="./news.php" class="navlink">News</a></li>
                <li><a href="./gallery.php" class="navlink">Gallery</a></li>
                <li><a href="#" class="navlink">Teams</a></li>
                <li><a href="#" class="navlink">Fixtures</a></li>
                <li><a href="#" class="navlink">Results</a></li>
                <li><a href="#" class="navlink">More</a></li>
            </ul>
            
        </nav>

        <a class="login" href="<?php 
                                    if (isset($_SESSION['login-email'])){
                                        echo './profile.php';
                                    }else {
                                        echo './login.php';
                                    }
                                ?>"><i class="fas fa-user"></i></a>
    </header>

    <a href="./logout.php">LOGOUT</a>

    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>