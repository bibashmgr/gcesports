<?php

session_start();

include('./path.php');

include(ROOT_PATH . '/main/database/db.php');

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

    <?php
    $table = 'newspanel';
    $news = selectAll($table);
    ?>

    <section class="section-container">
        <div class="news-container">
            <div class="news-container-heading">
                NEWS & UPDATES
            </div>
            <div class="news-box">
                <?php
                if (isset($_GET['i'])) {
                    $i = $_GET['i'];
                } else {
                    $i = 0;
                }
                $counter = $i + 5;
                ?>
                <?php for ($i; $i < $counter; $i++) : ?>

                    <?php if ($i < count($news)) : ?>

                        <div class="news-sub-box">
                            <!-- news-image -->
                            <div class="news-image">
                                <img src="<?php echo './media/news/' . $news[$i]['image']; ?>" alt="<?php echo $news[$i]['image']; ?>">
                            </div>
                            <!-- news-text -->
                            <div class="news-text">
                                <!-- news-text-date -->
                                <div class="news-date">
                                    <div class="news-day"><?php echo date('d', strtotime($news[$i]['date'])); ?></div>
                                    <div class="news-month"><?php echo date('M', strtotime($news[$i]['date'])); ?></div>
                                    <div class="news-year"><?php echo date('Y', strtotime($news[$i]['date'])); ?></div>
                                </div>
                                <!-- news-text-heading -->
                                <div class="news-heading">
                                    <a href="./page.php?page_id=<?php echo $news[$i]['id'];; ?>"><?php echo $news[$i]['title']; ?></a>
                                </div>
                                <!-- news-text-description -->
                                <div class=" news-desc">
                                    <?php echo $news[$i]['body']; ?>
                                </div>
                                <!-- news-text-link -->
                                <div class="news-link">
                                    <a href="./page.php?page_id=<?php echo $news[$i]['id']; ?>"><i>Read more...</i></a>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                <?php endfor; ?>

            </div>
            <div class="more-news">
                <a href="./news.php?i=<?php echo $i; ?>"><i>
                        <?php if (count($news) > $i) {

                            echo 'See More...';
                        } ?>
                    </i></a>
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