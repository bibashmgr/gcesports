<?php 
    session_start();
?>

<header>

        <a href="<?php echo BASE_URL . '/index.php';?>"><img class="logo" src="./media/logo.png" alt="logo" /></a>
        
        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo BASE_URL . '/index.php';?>" class="navlink">Home</a></li>
                <li><a href="<?php echo BASE_URL . '/news.php';?>" class="navlink">News</a></li>
                <li><a href="<?php echo BASE_URL . '/gallery.php';?>" class="navlink">Gallery</a></li>
                <li><a href="#" class="navlink">Teams</a></li>
                <li><a href="#" class="navlink">Fixtures</a></li>
                <li><a href="#" class="navlink">Results</a></li>
                <li><a href="#" class="navlink">More</a></li>
            </ul>
            
        </nav>

        <a class="login" href="<?php if(isset($_SESSION['admin'])){
                                    echo BASE_URL . '/login.php';
                                } else {
                                    echo BASE_URL . '/profile.php';
                                } ?>"><i class="fas fa-user"></i></a>
</header>