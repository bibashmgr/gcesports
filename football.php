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
        $teamFirstCom = selectAll($table, ['teamname' => 'first year', 'teamgender' => 'boys', 'teamfaculty' => 'COM']);
        $teamFirstSof = selectAll($table, ['teamname' => 'first year', 'teamgender' => 'boys', 'teamfaculty' => 'SOF']);
        $teamSecondCom = selectAll($table, ['teamname' => 'second year', 'teamgender' => 'boys', 'teamfaculty' => 'COM']);
        $teamsecondSof = selectAll($table, ['teamname' => 'second year', 'teamgender' => 'boys', 'teamfaculty' => 'SOF']);
        $teamThirdCom = selectAll($table, ['teamname' => 'third year', 'teamgender' => 'boys', 'teamfaculty' => 'COM']);
        $teamThirdSof = selectAll($table, ['teamname' => 'third year', 'teamgender' => 'boys', 'teamfaculty' => 'SOF']);
        $teamFourthCom = selectAll($table, ['teamname' => 'fourth year', 'teamgender' => 'boys', 'teamfaculty' => 'COM']);
        $teamFourthSof = selectAll($table, ['teamname' => 'fourth year', 'teamgender' => 'boys', 'teamfaculty' => 'SOF']);

        $teamnames = array("first year", "second year", "third year", "fourth year");
        $teamgenders = array("boys");
        $teamfacultys = array("COM", "SOF");
        $teams = selectAll($table, ['teamname' => '', 'teamgender' => '', 'teamfaculty' => '']);

        ?>

        <div class="table-container" id="table-three-sof">

            <h2 style="margin-top:30px; text-transform:capitalize;"><?php echo $teamThirdSof[0]['teamname'] . ' ' .  $teamThirdSof[0]['teamgender'] . '(' . $teamThirdSof[0]['teamfaculty'] . '):'; ?></h2>

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
                    <?php foreach ($teamThirdSof as $key => $teamThirdSofx) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $teamThirdSofx['playername']; ?></td>
                            <td><?php echo $teamThirdSofx['position']; ?></td>
                            <td><?php echo $teamThirdSofx['jerseynumber']; ?></td>
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

    </section>

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

    <!-- custom scripting -->
    <script>
        const year = document.getElementById('year');
        const gender = document.getElementById('gender');
        const faculty = document.getElementById('faculty');
        const teamThreeSof = document.getElementById('table-three-sof');
        const teamAll = document.querySelectorAll('.table-container');

        const selectTeam = () => {
            if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'SOF') {
                teamAll.forEach(function(element) {
                    element.setAttribute("style", "display:none");
                });
                teamThreeSof.setAttribute("style", "display:block");
            } else {
                teamAll.forEach(function(element) {
                    element.setAttribute("style", "display:none");
                });
            }
        };
    </script>

</body>

</html>