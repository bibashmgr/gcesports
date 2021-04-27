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
                <div class="news-one">
                    <div class="news-one-image">
                        <img src="./media/News/news01.jpg" alt="News01">
                    </div>
                    <div class="news-one-text">
                        <div class="news-one-date">
                            <div class="news-one-day">16</div>
                            <div class="news-one-month">MAR</div>
                            <div class="news-one-year">2021</div>
                        </div>
                        <div class="news-one-heading">
                            Nepal to Play a friendly match Against Qatar!
                        </div>
                        <div class="news-one-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet?
                        </div>
                        <div class="news-one-link">
                            <a href="#"><i>Read more...</i></a>
                        </div>
                    </div>
                </div>
                <div class="news-two">
                    <div class="news-two-image">
                        <img src="./media/News/news02.jpg" alt="News02">
                    </div>
                    <div class="news-two-text">
                        <div class="news-two-date">
                            <div class="news-two-day">01</div>
                            <div class="news-two-month">JAN</div>
                            <div class="news-two-year">2021</div>
                        </div>
                        <div class="news-two-heading">
                            Eight Nepali Cricketers Register for IPL 2021 Player Auction!
                        </div>
                        <div class="news-two-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet?
                        </div>
                        <div class="news-two-link">
                            <a href="#"><i>Read more...</i></a>
                        </div>
                    </div>
                </div>
                <div class="news-three">
                    <div class="news-three-image">
                        <img src="./media/News/news03.jpg" alt="News03">
                    </div>
                    <div class="news-one-text">
                        <div class="news-three-date">
                            <div class="news-three-day">20</div>
                            <div class="news-three-month">FEB</div>
                            <div class="news-three-year">2021</div>
                        </div>
                        <div class="news-three-heading">
                            LIVE: Kathmandu Mayor’s Cup 2021 – Tribhuwan Army Club vs Kathmandu Mayor
                        </div>
                        <div class="news-three-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet?
                        </div>
                        <div class="news-three-link">
                            <a href="#"><i>Read more...</i></a>
                        </div>
                    </div>
                </div>
                <div class="news-four">
                    <div class="news-four-image">
                        <img src="./media/News/news04.jpg" alt="News04">
                    </div>
                    <div class="news-four-text">
                        <div class="news-four-date">
                            <div class="news-four-day">23</div>
                            <div class="news-four-month">APR</div>
                            <div class="news-four-year">2021</div>
                        </div>
                        <div class="news-four-heading">
                            Gary Phillips Becomes New Head Coach of Men’s Volleyball Team!
                        </div>
                        <div class="news-four-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet?
                        </div>
                        <div class="news-four-link">
                            <a href="#"><i>Read more...</i></a>
                        </div>
                    </div>
                </div>
                <div class="news-five">
                    <div class="news-five-image">
                        <img src="./media/News/news05.jpg" alt="News05">
                    </div>
                    <div class="news-five-text">
                        <div class="news-five-date">
                            <div class="news-five-day">10</div>
                            <div class="news-five-month">MAY</div>
                            <div class="news-five-year">2021</div>
                        </div>
                        <div class="news-five-heading">
                            Nepal Women Football team Won Against Pakistan!
                        </div>
                        <div class="news-five-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, repudiandae! Quasi nulla, 
                            consequatur quae repudiandae esse itaque quis dicta. Cum provident molestias libero officia 
                            suscipit ducimus! Minus optio doloribus amet?
                        </div>
                        <div class="news-five-link">
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