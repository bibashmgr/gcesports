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

    <title>Teams>>Football</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/teams.css?v=<?php echo time(); ?>" />
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

    <!-- section: -->

    <section>
        <h1>FOOTBALL TEAMS</h1>
        <h2>TEAM THIRD SEM.</h2>
        <h3>STARTING XI</h3>
            <table>
                <thead>
                    <th>S.N</th>
                    <th>NAME</th>
                    <th>POS</th>
                    <th>J.N</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>RAM BAHADUR</td>
                        <td>GK</td>
                        <td>99</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SHYAM BAHADUR</td>
                        <td>DF</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>HARI BAHADUR</td>
                        <td>DF</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>KUMAR BAHADUR</td>
                        <td>DF</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>KRISHNA BAHADUR</td>
                        <td>DF</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>SHREE BAHADUR</td>
                        <td>MF</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>LOK BAHADUR</td>
                        <td>MF</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>TULARAM BAHADUR</td>
                        <td>MF</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>RISHI BAHADUR</td>
                        <td>FW</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>KADAK BAHADUR</td>
                        <td>FW</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>PARSAD BAHADUR</td>
                        <td>FW</td>
                        <td>11</td>
                    </tr>
                </tbody>
            </table>
        <h3>EXTRAS</h3>
            <table>
                <thead>
                    <th>S.N</th>
                    <th>NAME</th>
                    <th>POS</th>
                    <th>J.N</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>SITA RAM PRASAD</td>
                        <td>GK</td>
                        <td>66</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>RAM KUMAR</td>
                        <td>DF</td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>HARI PRASAD</td>
                        <td>DF</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TIGER PRASAD</td>
                        <td>MF</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>MAX BAHADUR</td>
                        <td>FW</td>
                        <td>8</td>
                    </tr>
                </tbody>
            </table>
    </section>

    <!-- footer: about-us, send-feedback and contact-us -->

    <?php include(ROOT_PATH . '/main/includes/footer.php') ?>

    <!-- custom scripting -->
    <script src="./src/script/teams.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>