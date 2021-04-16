
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
    <link rel="stylesheet" href="../css/gallery.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time(); ?>" />

    <!-- light-box styling -->
    <link rel="stylesheet" href="../css/lightbox.min.css?v=<?php echo time(); ?>">

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>

    <!-- header: nav-bar -->

    <?php include('./includes/header.php') ?>

    <!-- section: gallery -->
    <section class="section-container">
        <div class="gallery-container">
            <div class="gallery-heading">
                GALLERY
            </div>
            <div class="gallery-section">
                <a href="../../media/Gallery/gallery11.jpeg" data-lightbox="gallery01"><img src="../../media/Gallery/gallery11.jpeg" /></a>
                <a href="../../media/Gallery/gallery02.jpg" data-lightbox="gallery02"><img src="../../media/Gallery/gallery02.jpg" /></a>
                <a href="../../media/Gallery/gallery03.jpg" data-lightbox="gallery03"><img src="../../media/Gallery/gallery03.jpg" /></a>
                <a href="../../media/Gallery/gallery18.jpg" data-lightbox="gallery04"><img src="../../media/Gallery/gallery18.jpg" /></a>
                <a href="../../media/Gallery/gallery15.jpg" data-lightbox="gallery05"><img src="../../media/Gallery/gallery15.jpg" /></a>
                <a href="../../media/Gallery/gallery13.jpg" data-lightbox="gallery06"><img src="../../media/Gallery/gallery13.jpg" /></a>
                <a href="../../media/Gallery/gallery07.jpg" data-lightbox="gallery07"><img src="../../media/Gallery/gallery07.jpg" /></a>
                <a href="../../media/Gallery/gallery04.jpg" data-lightbox="gallery08"><img src="../../media/Gallery/gallery04.jpg" /></a>
                <a href="../../media/Gallery/gallery09.jpg" data-lightbox="gallery09"><img src="../../media/Gallery/gallery09.jpg" /></a>
                <a href="../../media/Gallery/gallery01.jpg" data-lightbox="gallery10"><img src="../../media/Gallery/gallery01.jpg" /></a>
                <a href="../../media/Gallery/gallery10.jpg" data-lightbox="gallery11"><img src="../../media/Gallery/gallery10.jpg" /></a>
                <a href="../../media/Gallery/gallery12.jpeg" data-lightbox="gallery12"><img src="../../media/Gallery/gallery12.jpeg" /></a>
                <a href="../../media/Gallery/gallery16.jpg" data-lightbox="gallery13"><img src="../../media/Gallery/gallery16.jpg" /></a>
                <a href="../../media/Gallery/gallery14.jpg" data-lightbox="gallery14"><img src="../../media/Gallery/gallery14.jpg" /></a>
                <a href="../../media/Gallery/gallery05.jpg" data-lightbox="gallery15"><img src="../../media/Gallery/gallery05.jpg" /></a>
                <a href="../../media/Gallery/gallery06.jpg" data-lightbox="gallery16"><img src="../../media/Gallery/gallery06.jpg" /></a>
                <a href="../../media/Gallery/gallery17.jpg" data-lightbox="gallery17"><img src="../../media/Gallery/gallery17.jpg" /></a>
                <a href="../../media/Gallery/gallery08.jpg" data-lightbox="gallery18"><img src="../../media/Gallery/gallery08.jpg" /></a>
            </div>
            <div class="more-galley">
                <a href="#" class="more-gallery-links"><i>See more...</i></a>
            </div>
        </div>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include('./includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="../javascript/gallery.js"></script>

    <!-- light-box scripting -->
    <script src="../javascript/lightbox-plus-jquery.min.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>