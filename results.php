<?php 

    session_start();

    include('./path.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Results Page</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/results.css?v=<?php echo time(); ?>" />
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

    <!-- section: results-container -->

    <section class="results-container">
        <h1>RESULTS</h1>
        <table>
            <thead>
                <th>Match Details</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Learn More</th>
            </thead>
            <tbody>

                <tr>
                    <td colspan="7" style="text-transform: uppercase;">football</td>
                </tr>
                <tr>
                    <td>25.05.2020 - 12:00</td>
                    <td>First Year Boys (SOF)</td>
                    <td>2</td>
                    <td>-</td>
                    <td>3</td>
                    <td>Second Year Boys (COM)</td>
                    <td><a href="#" class="info-link">View Info</a></td>
                </tr>

                <tr>
                    <td colspan="7" style="text-transform: uppercase;">Basketball</td>
                </tr>
                <tr>
                    <td>25.05.2020 - 12:00</td>
                    <td>First Year Girls (SOF)</td>
                    <td>2</td>
                    <td>-</td>
                    <td>3</td>
                    <td>Second Year Girls (COM)</td>
                    <td><a href="#" class="info-link">View Info</a></td>
                </tr>

                <tr>
                    <td colspan="7" style="text-transform: uppercase;">Volleyball</td>
                </tr>
                <tr>
                    <td>25.05.2020 - 12:00</td>
                    <td>First Year Boys (SOF)</td>
                    <td>2</td>
                    <td>-</td>
                    <td>3</td>
                    <td>Second Year Boys (COM)</td>
                    <td><a href="#" class="info-link">View Info</a></td>
                </tr>
            </tbody>
        </table>
    </section>



    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/results.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>