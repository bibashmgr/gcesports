<?php

session_start();

include('./path.php');

include(ROOT_PATH . '/main/database/db.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Home Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/index.css?v=<?php echo time(); ?>" />
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

    <!-- section-one: background-theme and text-animation -->
    <section class="section-one">
        <div class="content-one-a">
            <div class="content-one-bg">

            </div>

            <div class="content-one-text">
                <div class="content-one-heading-a">
                    WELCOME TO
                </div>

                <div class="content-one-heading-b">
                    GCES<span style="color: #FFCD02;">ports.</span>
                </div>

                <div class="content-one-desc">A site that keeps updating news and moments<br />
                    of sport meet events held by Gandaki College <br />
                    Of Engineering And Science(GCES) every year.</div>

                <div class="content-one-button">
                    <a href="#footer-email">CONTACT US!</a>
                </div>
            </div>

        </div>

        <!-- text-animation -->
        <div class="content-one-b">
            LATEST RESULTS:
            <span id="animated-text"></span>
        </div>
    </section>

    <?php
    $newstable = 'newspanel';
    $latestnews = selectDesc($newstable);
    $featurednews = selectByFeatured($newstable);

    function selectDesc($table)
    {
        global $conn;

        $sql = "SELECT * FROM $table ORDER BY date DESC LIMIT 2";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

    function selectByFeatured($table)
    {
        global $conn;

        $sql = "SELECT * FROM $table WHERE featured = '1' LIMIT 2";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    ?>

    <!-- section-two: latest-news, featured-news and upcoming-events -->
    <section class="section-two">
        <div class="content-two">

            <!-- latest news -->
            <div class="content-two-b">
                <div class="content-heading">
                    LATEST NEWS
                </div>
                <?php foreach ($latestnews as $key => $latestnew) : ?>
                    <div class="content-news">
                        <div class="news-image">
                            <img src="<?php echo './media/news/' . $latestnew['image']; ?>" alt="<?php echo $latestnew['image']; ?>">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                <div class="news-day"><?php echo date('d', strtotime($latestnew['date'])); ?></div>
                                <div class="news-month"><?php echo date('M', strtotime($latestnew['date'])); ?></div>
                                <div class="news-year"><?php echo date('Y', strtotime($latestnew['date'])); ?></div>
                            </div>
                            <div class="news-heading">
                                <a href="./page.php?page_id=<?php echo $latestnew['id']; ?>"><?php echo $latestnew['title']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- featured news -->
            <div class="content-two-a">
                <div class="content-heading">
                    FEATURED NEWS
                </div>
                <?php foreach ($featurednews as $key => $featurednew) : ?>
                    <div class="content-news">
                        <div class="news-image">
                            <img src="<?php echo './media/news/' . $featurednew['image']; ?>" alt="<?php echo $featurednew['image']; ?>">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                <div class="news-day"><?php echo date('d', strtotime($featurednew['date'])); ?></div>
                                <div class="news-month"><?php echo date('M', strtotime($featurednew['date'])); ?></div>
                                <div class="news-year"><?php echo date('Y', strtotime($featurednew['date'])); ?></div>
                            </div>
                            <div class="news-heading">
                                <a href="./page.php?page_id=<?php echo $featurednew['id']; ?>"><?php echo $featurednew['title']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Upcoming games -->

            <div class="content-two-c">
                <div class="content-two-c-heading">
                    UPCOMING GAMES
                </div>
                <div class="content-two-c-title">
                    <a href="">TEAM FOURTH SEM. <span style="opacity: 0.25;"> VS </span> SECOND SEM.</a>
                </div>
                <div class="content-two-c-game">
                    (CRICKET MATCH)
                </div>
                <div class="content-two-c-image">

                </div>
                <div class="content-two-c-time">
                    <i class="fas fa-clock"></i> 21 March 2020
                </div>
                <div class="content-two-c-extras">
                    No upcoming events.
                </div>
            </div>

        </div>
    </section>

    <!-- section-three: top-players -->
    <section class="section-three">
        <div class="content-three">
            <div class="content-three-heading">
                TOP <span style="color: #FFCD02;">PLAYERS</span>
            </div>
            <div class="content-three-details">
                <div class="content-three-a">
                    <div class="content-three-image-a">

                    </div>
                    <div class="content-three-name-a">
                        <div class="name-a">
                            LEBRON JAMES
                            <div class="type-a">
                                BASKETBALL
                            </div>
                        </div>
                        <div class="score-a">
                            <div class="score-a-num">37</div>
                            <div class="score-a-unit">points</div>
                        </div>
                    </div>
                </div>
                <div class="content-three-b">
                    <div class="content-three-image-b">

                    </div>
                    <div class="content-three-name-b">
                        <div class="name-b">
                            C.RONALDO
                            <div class="type-b">
                                FOOTBALL
                            </div>
                        </div>
                        <div class="score-b">
                            <div class="score-b-num">07</div>
                            <div class="score-b-unit">goals</div>
                        </div>
                    </div>
                </div>
                <div class="content-three-c">
                    <div class="content-three-image-c">

                    </div>
                    <div class="content-three-name-c">
                        <div class="name-c">
                            CHARLIE WHITE
                            <div class="type-c">
                                VOLLEYBALL
                            </div>
                        </div>
                        <div class="score-c">
                            <div class="score-c-num">21</div>
                            <div class="score-c-unit">points</div>
                        </div>
                    </div>
                </div>
                <div class="content-three-d">
                    <div class="content-three-image-d">

                    </div>
                    <div class="content-three-name-d">
                        <div class="name-d">
                            VIRAT KOHLI
                            <div class="type-d">
                                CRICKET
                            </div>
                        </div>
                        <div class="score-d">
                            <div class="score-d-num">72</div>
                            <div class="score-d-unit">runs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $gallerytable = 'gallerypanel';
    $sliderRand = selectRand($gallerytable);

    function selectRand($table)
    {
        global $conn;
        $randomNum = time() % 10;

        if ($randomNum < 2) {
            $sql = "SELECT * FROM $table LIMIT 5";
        } elseif ($randomNum > 2 && $randomNum < 4) {
            $sql = "SELECT * FROM $table ORDER BY name LIMIT 5";
        } elseif ($randomNum > 4 && $randomNum < 6) {
            $sql = "SELECT * FROM $table ORDER BY image LIMIT 5";
        } elseif ($randomNum > 6 && $randomNum < 8) {
            $sql = "SELECT * FROM $table ORDER BY date ASC LIMIT 5";
        } else {
            $sql = "SELECT * FROM $table ORDER BY date DESC LIMIT 5";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    ?>

    <!-- section-four: gallery and leaderboards -->
    <section class="section-four">
        <div class="content-four">

            <!-- gallery-section -->
            <div class="content-four-a">
                <div class="content-four-a-heading">
                    GALLERY
                </div>
                <div class="content-four-a-slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <input type="radio" name="radio-btn" id="radio5">

                        <div class="slide first">
                            <img src="<?php echo './media/gallery/' . $sliderRand[0]['image']; ?>" alt="<?php echo $sliderRand[0]['image']; ?>">
                        </div>
                        <div class="slide">
                            <img src="<?php echo './media/gallery/' . $sliderRand[1]['image']; ?>" alt="<?php echo $sliderRand[1]['image']; ?>">
                        </div>
                        <div class="slide">
                            <img src="<?php echo './media/gallery/' . $sliderRand[2]['image']; ?>" alt="<?php echo $sliderRand[2]['image']; ?>">
                        </div>
                        <div class="slide">
                            <img src="<?php echo './media/gallery/' . $sliderRand[3]['image']; ?>" alt="<?php echo $sliderRand[3]['image']; ?>">
                        </div>
                        <div class="slide">
                            <img src="<?php echo './media/gallery/' . $sliderRand[4]['image']; ?>" alt="<?php echo $sliderRand[4]['image']; ?>">
                        </div>
                        <div class="auto-navigation">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                            <div class="auto-btn5"></div>
                        </div>
                    </div>
                    <div class="manual-navigation">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                        <label for="radio5" class="manual-btn"></label>
                    </div>
                </div>
            </div>

            <!-- leaderboard-section -->
            <div class="content-four-b">
                <div class="content-four-b-heading">
                    RESULTS
                </div>
                <div class="content-four-b-game">
                    (FOOTBALL)
                </div>
                <div class="content-four-b-table">
                    <table>
                        <tr>
                            <th>TEAM</th>
                            <th>P</th>
                            <th>W</th>
                            <th>D</th>
                            <th>L</th>
                            <th>PTS</th>
                        </tr>
                        <tr>
                            <td>SECOND YEAR</td>
                            <td>5</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>FOURTH YEAR</td>
                            <td>5</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>SECOND YEAR</td>
                            <td>5</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>FIRST YEAR-C</td>
                            <td>4</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>FIRST YEAR-S</td>
                            <td>4</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>7</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

    <!-- custom scripting -->
    <script src="./src/script/index.js"></script>

</body>

</html>