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

    <title>Teams/TableTennis</title>

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

    <h1>TABLE TENNIS TEAM</h1>
    
    <form action="" class="team-search-form">
        <div class="select-year">
            <label for="year">Year:</label>
            <select name="year" id="year">
                <option value="first-year">First Year</option>
                <option value="second-year">Second Year</option>
                <option value="third-year">Third Year</option>
                <option value="fourth-year">Fourth Year</option>
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
                <option value="software">Software</option>
                <option value="computer">Computer</option>
            </select>
        </div>
    
        <div class="select-group">
            <label for="group">Group:</label>
            <select name="group" id="group">
                <option value="team">Team</option>
                <option value="solo">Solo</option>
            </select>
        </div>
    
        <input type="submit" value="Search" class="select-search"/>
    
    </form>
    
    <h2>FIRST YEAR BOYS</h2>
    
    <h2 style="margin-top:30px;">SOFTWARE:</h2>
        <table class="team-table">
            <thead>
                <th>S.N</th>
                <th>NAME</th>
            </thead>
            <tbody>
    
                <tr>
                    <td colspan="2">TEAM A</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Ram Bahadur</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Ram Bahadur</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
    
                <tr>
                    <td colspan="2">TEAM B</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Ram Bahadur</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Ram Bahadur</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
    
                <tr>
                    <td colspan="2">TEAM C</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Ram Bahadur</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Ram Bahadur</td>
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