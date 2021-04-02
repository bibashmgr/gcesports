<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Login Page</title>

    <link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>" />

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

        <a class="login" href="./login.php"><i class="fas fa-user"></i></a>
    </header>

    <section class="section-container">
        <div class="login-container">
            <div class="login-box">
                <div class="login-image">
                </div>
                <h1>Welcome</h1>
                <form id="form" class="form">
                    <div class="form-control">
                        <label for="email">Email:</label>
                        <input id="email" type="text" placeholder="Enter Email" autocomplete="off" />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input id="password" type="password" placeholder="Enter Password" autocomplete="off" />
                        <small>Error message</small>
                    </div>
                    <input type="submit" value="Login" />
                </form>
            </div>
        </div>
    </section>

    <!-- 
        FOOTER :
        ABOUT US, QUICK LINKS & CONTACT US;
    -->

    <footer class="footer-container">
        <div class="footer-about-us">
            <div>
                <div class="about-us-heading">
                ABOUT US
                </div>
                </div class="about-us-info">
                A site that keeps updating news and moments<br/> 
                of sport meet events held by Gandaki College <br/>
                Of Engineering And Science(GCES) every year.
                <div>
                <div class="about-us-logo">

                </div>
            </div>
        </div>
        <div class="footer-send-msg">
            <div class="footer-send-msg-heading">
                SEND FEEDBACK
            </div>
            <form action="feedback.php" method="POST" id="footer-feedback">
                <label class="label-email">EMAIL:</label>
                <input type="email" name="feedback-email" id="footer-email" placeholder="Enter Email" autocomplete="off" required/>
                <br/>
                <label class="label-comments">COMMENTS:</label>
                <textarea name="feeback-comments" id="footer-comments" placeholder="Enter comments" cols="22.5" rows="4" style="resize: none;" required></textarea>
                <br/>
                <input type="submit" value="SUBMIT" id="footer-submit-btn" />
            </form>
        </div>
        <div class="footer-contact">
            <div class="footer-contact-heading" >
                CONTACT
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span style="padding: 0px 5px;"></span>
                be2018se637@gces.edu.np
            </div>
            <div>
                <i class="fas fa-phone-alt"></i>
                <span style="padding: 0px 5px;"></span>
                +977-9806628788
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span style="padding: 0px 5px;"></span>
                Lamachour, Pokhara, Nepal
            </div>
        </div>
    </footer>

    <script src="../javascript/login.js"></script>

    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>