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

    <title>Teams/Cricket</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/types.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./src/style/header.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header: nav-bar -->

    <?php include(ROOT_PATH . '/main/includes/header.php'); ?>

    <!-- section: team-lists-->

    <section class="teams-lists">

        <h1>CRICKET TEAM</h1>

        <form action="" class="team-search-form">
            <div class="select-year">
                <label for="year">Year:</label>
                <select name="year" id="year">
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                </select>
            </div>

            <div class="select-gender">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="boys">Boys</option>
                    <option value="girls">Girls</option>
                </select>
            </div>

            <div class="select-faculty">
                <label for="faculty">Faculty:</label>
                <select name="faculty" id="faculty">
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>

            <input type="submit" value="Search" class="select-search" />

        </form>

        <h2>FIRST YEAR BOYS</h2>

        <h2 style="margin-top:30px;">SOFTWARE:</h2>
        <table class="team-table">
            <thead>
                <th>S.N</th>
                <th>NAME</th>
                <th>POS</th>
                <th>J.N</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">STARTING XI</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Ram Bahadur</td>
                    <td>C</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Ram Bahadur</td>
                    <td>WK</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Ram Bahadur</td>
                    <td>BOW</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Ram Bahadur</td>
                    <td>BOW</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>07</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>08</td>
                    <td>Ram Bahadur</td>
                    <td>BOW</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>09</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Ram Bahadur</td>
                    <td>BOW</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>

                <tr>
                    <td colspan="4">EXTRAS</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Ram Bahadur</td>
                    <td>BOW</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Ram Bahadur</td>
                    <td>BOW</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Ram Bahadur</td>
                    <td>BAT</td>
                    <td>99</td>
                </tr>

            </tbody>
        </table>
    </section>

    <!-- custom scripting -->
    <script src="./src/script/teams.js"></script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>