<?php 

    session_start();

    include('./path.php');

    include(ROOT_PATH . '/main/controllers/gallerypanel.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Gallery Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/gallery.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/footer.css?v=<?php echo time(); ?>" />

    <!-- light-box styling -->
    <link rel="stylesheet" href="./src/style/lightbox.min.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>

    <!-- header: nav-bar -->

    <?php include(ROOT_PATH . '/main/includes/header.php') ?>

    <!-- section: gallery -->
    <section class="section-container">
        <div class="gallery-container">
            <div class="gallery-heading">
                GALLERY
            </div>
            <div class="gallery-section">

                <?php 
                    if(isset($_GET['i'])){
                        $i = $_GET['i'];
                    } else {
                        $i = 0;
                    }
                    $counter = $i + 18;
                ?>

                <?php for($i; $i < $counter; $i++): ?>

                    <?php if($i<count($gallerys)): ?>

                        <a href="<?php echo './media/gallery/' . $gallerys[$i]['image'] ; ?>" data-lightbox="<?php echo $gallerys[$i]['image']; ?>">
                            <img src="<?php echo './media/gallery/' . $gallerys[$i]['image'] ; ?>" alt="<?php echo $gallerys[$i]['image']; ?>" />
                        </a>

                    <?php endif; ?>

                <?php endfor; ?>

            </div>
            <div class="more-galley">
                <a href="./gallery.php?i=<?php echo $i; ?>" class="more-gallery-links"><i>See more...</i></a>
            </div>
        </div>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/gallery.js"></script>

    <!-- light-box scripting -->
    <script src="./src/script/lightbox-plus-jquery.min.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>