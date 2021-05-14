<!-- header: nav-bar -->

<header>

<a href="<?php echo BASE_URL . '/index.php';?>"><img class="logo" src="../../../media/logo.png" alt="logo" /></a>

<a class="login" href=" <?php echo BASE_URL . '/profile.php';?>"><i class="fas fa-user"></i></a>

</header>

<!-- Side-bar -->

<!-- Side-bar buttons -->
<input type="checkbox" id="check" >
<label for="check">
    <i class="fas fa-bars" id="hamburger-btn"></i>
    <i class="fas fa-times" id="cancel-btn"></i>
</label>

<!-- Side-bar links -->
<div class="sidebar-container">
    <ul>
        <li><a href="<?php echo BASE_URL . '/main/admin/home/index.php';?>">Manage Home</a></li>
        <li><a href="<?php echo BASE_URL . '/main/admin/news/index.php';?>">Manage News</a></li>
        <li><a href="<?php echo BASE_URL . '/main/admin/gallery/index.php';?>">Manage Gallery</a></li>
        <li><a href="<?php echo BASE_URL . '/main/admin/teams/index.php';?>">Manage Teams</a></li>
        <li><a href="<?php echo BASE_URL . '/main/admin/fixtures/index.php';?>">Manage Fixtures</a></li>
        <li><a href="<?php echo BASE_URL . '/main/admin/results/index.php';?>">Manage Results</a></li>
    </ul>
</div>