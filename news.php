<?php 

    session_start();

    include('./path.php');

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

                <div class="news-sub-box">
                    <div class="news-image">
                        <img src="./media/news/news01.jpg" alt="News01">
                    </div>
                    <div class="news-text">
                        <div class="news-date">
                            <div class="news-day">16</div>
                            <div class="news-month">MAR</div>
                            <div class="news-year">2021</div>
                        </div>
                        <div class="news-heading">
                            Nepal to Play a friendly match Against Qatar!
                        </div>
                        <div class="news-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet?
                        </div>
                        <div class="news-link">
                            <a href="#"><i>Read more...</i></a>
                        </div>
                    </div>
                </div>
                
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