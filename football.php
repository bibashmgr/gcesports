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

    <title>Teams/Football</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="./src/style/types.css?v=<?php echo time(); ?>" />
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

    <!-- section: team-lists-->
    <section class="teams-lists">

        <h1>FOOTBALL TEAM</h1>

        <form action="./football.php" id="search-form" class="team-search-form">

            <div class="select-year">
                <label for="year">Year:</label>
                <select name="year" id="year" required>
                    <option value="" hidden></option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                </select>
            </div>

            <div class="select-gender">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option value="" hidden></option>
                    <option value="boys">Boys</option>
                </select>
            </div>

            <div class="select-faculty">
                <label for="faculty">Faculty:</label>
                <select name="faculty" id="faculty" required>
                    <option value="" hidden></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>

            <input type="button" value="Search" class="select-search" id="select-search" onclick="selectTeam()" />

        </form>

        <?php
        $table = 'footballpanel';

        $teamnames = array("first year", "second year", "third year", "fourth year");
        $teamgenders = array("boys");
        $teamfacultys = array("COM", "SOF");
        $x = 0;
        ?>

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <?php for ($k = 0; $k < 2; $k++) : ?>
                <?php $teams = selectAll($table, ['teamname' => $teamnames[$i], 'teamgender' => $teamgenders[0], 'teamfaculty' => $teamfacultys[$k]]); ?>

                <?php if (count($teams) != 0) : ?>
                    <div class="table-container" id="<?php echo ("table-" . $x); ?>">

                        <h2 style="margin-top:30px; text-transform:capitalize;">
                            <?php echo $teamnames[$i] . " " . $teamgenders[0] . " (" . $teamfacultys[$k] . "):"; ?>
                        </h2>

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
                                <?php foreach ($teams as $key => $team) : ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td><?php echo $team['playername']; ?></td>
                                        <td><?php echo $team['position']; ?></td>
                                        <td><?php echo $team['jerseynumber']; ?></td>
                                    </tr>
                                    <?php if ($key == 10) : ?>
                                        <tr>
                                            <td colspan="4">EXTRAS</td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    </div>
                <?php endif;  ?>
                <?php $x++; ?>
            <?php endfor; ?>
        <?php endfor; ?>

    </section>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

    <!-- custom scripting -->
    <script>
        const year = document.getElementById('year');
        const gender = document.getElementById('gender');
        const faculty = document.getElementById('faculty');

        const teamOneCom = document.getElementById('table-0');
        const teamOneSof = document.getElementById('table-1');
        const teamTwoCom = document.getElementById('table-2');
        const teamTwoSof = document.getElementById('table-3');
        const teamThreeCom = document.getElementById('table-4');
        const teamThreeSof = document.getElementById('table-5');
        const teamFourCom = document.getElementById('table-6');
        const teamFourSof = document.getElementById('table-7');

        const teamAll = document.querySelectorAll('.table-container');

        const selectTeam = () => {
            if (year.value == '' || gender.value == '' || faculty.value == '') {
                window.alert("Invalid input")
            } else {
                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneCom.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSof.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoCom.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSof.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeCom.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSof.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourCom.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSof.setAttribute("style", "display:block");
                }
            }
        }
    </script>

</body>

</html>