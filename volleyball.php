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

    <title>Teams/Volleyball</title>

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

        <h1>VOLLEYBALL TEAM</h1>

        <form action="./volleyball.php" id="search-form" class="team-search-form">
            <div class="select-year">
                <label for="year">Year:</label>
                <select name="year" id="year">
                    <option value="" hidden></option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                </select>
            </div>

            <div class="select-gender">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="" hidden></option>
                    <option value="boys">Boys</option>
                    <option value="girls">Girls</option>
                </select>
            </div>

            <div class="select-faculty">
                <label for="faculty">Faculty:</label>
                <select name="faculty" id="faculty">
                    <option value="" hidden></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>

            <input type="button" value="Search" class="select-search" id="select-search" onclick="selectTeam()" />

        </form>

        <?php
        $table = 'volleyballpanel';

        $teamnames = array("first year", "second year", "third year", "fourth year");
        $teamgenders = array("boys", "girls");
        $teamfacultys = array("COM", "SOF");
        $x = 0;
        ?>

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <?php for ($j = 0; $j < 2; $j++) : ?>
                <?php for ($k = 0; $k < 2; $k++) : ?>

                    <?php $teams = selectAll($table, ['teamname' => $teamnames[$i], 'teamgender' => $teamgenders[$j], 'teamfaculty' => $teamfacultys[$k]]); ?>

                    <?php if (count($teams) != 0) : ?>
                        <div class="table-container" id="<?php echo ("table-" . $x); ?>">

                            <h2 style="margin-top:30px; text-transform:capitalize;">
                                <?php echo $teamnames[$i] . " " . $teamgenders[$j] . " (" . $teamfacultys[$k] . "):"; ?>
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
                                        <?php if ($key == 5) : ?>
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
        <?php endfor; ?>

    </section>

    <!-- custom scripting -->
    <script>
        const year = document.getElementById('year');
        const gender = document.getElementById('gender');
        const faculty = document.getElementById('faculty');

        const teamOneComB = document.getElementById('table-0');
        const teamOneSofB = document.getElementById('table-1');
        const teamOneComG = document.getElementById('table-2');
        const teamOneSofG = document.getElementById('table-3');
        const teamTwoComB = document.getElementById('table-4');
        const teamTwoSofB = document.getElementById('table-5');
        const teamTwoComG = document.getElementById('table-6');
        const teamTwoSofG = document.getElementById('table-7');
        const teamThreeComB = document.getElementById('table-8');
        const teamThreeSofB = document.getElementById('table-9');
        const teamThreeComG = document.getElementById('table-10');
        const teamThreeSofG = document.getElementById('table-11');
        const teamFourComB = document.getElementById('table-12');
        const teamFourSofB = document.getElementById('table-13');
        const teamFourComG = document.getElementById('table-14');
        const teamFourSofG = document.getElementById('table-15');

        const teamAll = document.querySelectorAll('.table-container');

        const selectTeam = () => {
            if (year.value == '' || gender.value == '' || faculty.value == '') {
                window.alert("Invalid input")
            } else {

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneComB.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'girls' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneComG.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSofB.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'girls' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSofG.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoComB.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'girls' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoComG.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSofB.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'girls' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSofG.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeComB.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'girls' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeComG.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSofB.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'girls' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSofG.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourComB.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'girls' && faculty.value == 'COM') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourComG.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSofB.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'girls' && faculty.value == 'SOF') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSofG.setAttribute("style", "display:block");
                }
            }
        }
    </script>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>

</html>