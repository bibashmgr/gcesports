<?php

session_start();

include('./path.php');

include(ROOT_PATH . '/main/controllers/newspanel.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/page.css?v=<?php echo time(); ?>" />
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

    <?php
    $page = selectOne($table, ['id' => $page_id]);
    ?>

    <!--- section: content -->

    <section class="section-container">

        <div class="section-image">
            <img src="<?php echo './media/news/' . $page['image']; ?>" alt="<?php echo $page['image']; ?>">
        </div>
        <div class="section-head">
            <div class="section-date">
                <div class="news-day"><?php echo date('d', strtotime($page['date'])); ?></div>
                <div class="news-month"><?php echo date('M', strtotime($page['date'])); ?></div>
                <div class="news-year"><?php echo date('Y', strtotime($page['date'])); ?></div>
            </div>
            <div class="section-title">
                <?php echo $page['title']; ?>
            </div>
        </div>
        <div class="section-body">
            <?php echo $page['body']; ?>
        </div>

    </section>



    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>