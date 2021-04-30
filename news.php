<?php 

    session_start();

    include('./path.php');

    include(ROOT_PATH . '/main/controllers/newspanel.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta-tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>News Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/news.css?v=<?php echo time(); ?>" />
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

    <!-- section: news -->

    <section class="section-container">
        <div class="news-container">
            <div class="news-container-heading">
                NEWS & UPDATES
            </div>
            <div class="news-box">

                <?php foreach ($news as $key => $new): ?>

                    <div class="news-sub-box">
                        <!-- news-image -->
                        <div class="news-image">
                            <img src="<?php echo './media/news/' . $new['image'] ; ?>" alt="<?php echo $new['image']; ?>">
                        </div>
                        <!-- news-text -->
                        <div class="news-text">
                            <!-- news-text-date -->
                            <div class="news-date">
                                <div class="news-day">16</div>
                                <div class="news-month">MAR</div>
                                <div class="news-year">2021</div>
                            </div>
                            <!-- news-text-heading -->
                            <div class="news-heading">
                                <?php echo $new['title']; ?>
                            </div>
                            <!-- news-text-description -->
                            <div class="news-desc">
                                <?php echo $new['body']; ?>
                            </div>
                            <!-- news-text-link -->
                            <div class="news-link">
                                <a href="#"><i>Read more...</i></a>
                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>
                
            </div>
            <div class="more-news">
                <a href="#" ><i>See More...</i></a>
            </div>
        </div>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/news.js"></script>
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>