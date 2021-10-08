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

    <title>Teams/TableTennis</title>

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

        <h1>TABLE TENNIS TEAM</h1>

        <form action="./football.php" id="search-form" class="team-search-form">
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

            <div class="select-group">
                <label for="group">Group:</label>
                <select name="group" id="group">
                    <option value="" hidden></option>
                    <option value="team">Team</option>
                    <option value="solo">Solo</option>
                </select>
            </div>

            <input type="button" value="Search" class="select-search" id="select-search" onclick="selectTeam()" />

        </form>

        <?php
        $table = 'tabletennispanel';

        $teamnames = array("first year", "second year", "third year", "fourth year");
        $teamgenders = array("boys", "girls");
        $teamfacultys = array("COM", "SOF");
        $groupeds = array("team", "solo");

        // for table-ids
        $x = 0;
        $y = 100;

        // for team naming and player ordering number
        $a = 0;
        $b = 1;

        $teamNum = range('A', 'Z');
        ?>

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <?php for ($j = 0; $j < 2; $j++) : ?>
                <?php for ($k = 0; $k < 2; $k++) : ?>

                    <?php $teams = selectAll($table, ['teamname' => $teamnames[$i], 'teamgender' => $teamgenders[$j], 'teamfaculty' => $teamfacultys[$k], 'grouped' => $groupeds[0]]); ?>

                    <?php if (count($teams) != 0) : ?>
                        <div class="table-container" id="<?php echo ("table-" . $x); ?>">

                            <h2 style="margin-top:30px; text-transform:capitalize;">
                                <?php echo $teamnames[$i] . " " . $teamgenders[$j] . " (" . $teamfacultys[$k] . "):"; ?>
                            </h2>

                            <table class="team-table">

                                <thead>
                                    <th>S.N</th>
                                    <th>NAME</th>
                                </thead>

                                <tbody>
                                    <?php foreach ($teams as $key => $team) : ?>
                                        <?php if ($key % 2 == 0) : ?>
                                            <tr>
                                                <td colspan="2"><?php echo "Team" . $teamNum[$a] ?></td>
                                            </tr>
                                            <?php $a++; ?>
                                            <?php $b = 1; ?>
                                        <?php endif; ?>
                                        <tr>
                                            <td><?php echo $b; ?></td>
                                            <td><?php echo $team['playername']; ?></td>
                                        </tr>
                                        <?php $b++; ?>
                                        <?php if ($key == 1) : ?>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
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

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <?php for ($j = 0; $j < 2; $j++) : ?>
                <?php for ($k = 0; $k < 2; $k++) : ?>

                    <?php $teams = selectAll($table, ['teamname' => $teamnames[$i], 'teamgender' => $teamgenders[$j], 'teamfaculty' => $teamfacultys[$k], 'grouped' => $groupeds[1]]); ?>

                    <?php if (count($teams) != 0) : ?>
                        <div class="table-container" id="<?php echo ("table-" . $y); ?>">

                            <h2 style="margin-top:30px; text-transform:capitalize;">
                                <?php echo $teamnames[$i] . " " . $teamgenders[$j] . " (" . $teamfacultys[$k] . "):"; ?>
                            </h2>

                            <table class="team-table">

                                <thead>
                                    <th>S.N</th>
                                    <th>NAME</th>
                                </thead>

                                <tbody>
                                    <?php foreach ($teams as $key => $team) : ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $team['playername']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>
                    <?php endif;  ?>
                    <?php $y++; ?>
                <?php endfor; ?>
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
        const group = document.getElementById('group');

        const teamOneComBT = document.getElementById('table-0');
        const teamOneSofBT = document.getElementById('table-1');
        const teamOneComGT = document.getElementById('table-2');
        const teamOneSofGT = document.getElementById('table-3');
        const teamTwoComBT = document.getElementById('table-4');
        const teamTwoSofBT = document.getElementById('table-5');
        const teamTwoComGT = document.getElementById('table-6');
        const teamTwoSofGT = document.getElementById('table-7');
        const teamThreeComBT = document.getElementById('table-8');
        const teamThreeSofBT = document.getElementById('table-9');
        const teamThreeComGT = document.getElementById('table-10');
        const teamThreeSofGT = document.getElementById('table-11');
        const teamFourComBT = document.getElementById('table-12');
        const teamFourSofBT = document.getElementById('table-13');
        const teamFourComGT = document.getElementById('table-14');
        const teamFourSofGT = document.getElementById('table-15');

        const teamOneComBS = document.getElementById('table-100');
        const teamOneSofBS = document.getElementById('table-101');
        const teamOneComGS = document.getElementById('table-102');
        const teamOneSofGS = document.getElementById('table-103');
        const teamTwoComBS = document.getElementById('table-104');
        const teamTwoSofBS = document.getElementById('table-105');
        const teamTwoComGS = document.getElementById('table-106');
        const teamTwoSofGS = document.getElementById('table-107');
        const teamThreeComBS = document.getElementById('table-108');
        const teamThreeSofBS = document.getElementById('table-109');
        const teamThreeComGS = document.getElementById('table-110');
        const teamThreeSofGS = document.getElementById('table-111');
        const teamFourComBS = document.getElementById('table-112');
        const teamFourSofBS = document.getElementById('table-113');
        const teamFourComGS = document.getElementById('table-114');
        const teamFourSofGS = document.getElementById('table-115');

        const teamAll = document.querySelectorAll('.table-container');

        const selectTeam = () => {
            if (year.value == '' || gender.value == '' || faculty.value == '') {
                window.alert("Invalid input")
            } else {

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneComBT.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneComGT.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSofBT.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSofGT.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoComBT.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoComGT.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSofBT.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSofGT.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeComBT.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeComGT.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSofBT.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSofGT.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourComBT.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourComGT.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSofBT.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'team') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSofGT.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneComBS.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneComGS.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSofBS.setAttribute("style", "display:block");
                }

                if (year.value == 'first year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamOneSofGS.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoComBS.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoComGS.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSofBS.setAttribute("style", "display:block");
                }

                if (year.value == 'second year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamTwoSofGS.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeComBS.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeComGS.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSofBS.setAttribute("style", "display:block");
                }

                if (year.value == 'third year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamThreeSofGS.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourComBS.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'girls' && faculty.value == 'COM' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourComGS.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'boys' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSofBS.setAttribute("style", "display:block");
                }

                if (year.value == 'fourth year' && gender.value == 'girls' && faculty.value == 'SOF' && group.value == 'solo') {
                    teamAll.forEach(function(element) {
                        element.setAttribute("style", "display:none");
                    });
                    teamFourSofGS.setAttribute("style", "display:block");
                }
            }
        }
    </script>

</body>

</html>