<?php 

    session_start();

    include('../../../path.php');

    include(ROOT_PATH . '/main/controllers/teamspanel.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Add Teams</title>

    <!-- custom styling -->
    <link rel="stylesheet" href="../css/panelheader.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/teamspanel.css?v=<?php echo time(); ?>" />

    <!-- goggle fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header: nav-bar & sidebar -->

    <?php include(ROOT_PATH . '/main/admin/includes/header.php') ?>

    <!-- section: teams-panel-form -->

    <section class="teams-panel-form">
        <h1>Add Teams</h1>
        <form action="football.php" method="POST" name="teamForm">
            <h3>Cricket:</h3>
            <div>
                <input type="text" name="sports" id="sports" value="cricket" hidden>
            </div>
            <div>
                <label for="teamname">Team:</label><br/>
                <select name="teamname" id="teamname" required>
                    <option hidden></option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                    <option value="staffs">Staffs</option>
                </select>
                <select name="teamgender" id="teamgender" required>
                    <option hidden></option>
                    <option value="boys">Boys</option>
                </select>
                <select name="teamfaculty" id="teamfaculty" required>
                    <option hidden></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>
            <div id="starting">
                <label for="starting">Starting XI:</label><br/>
                <div>
                    <span class="numbers">01.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">02.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">03.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">04.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">05.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">06.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">07.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">08.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">09.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">10.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span class="numbers">11.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
            </div>
            <div id="extras">
                <label for="extras">Extras:</label><br/>
                <div>
                    <span class="numbers">01.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span class="numbers">02.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span class="numbers">03.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span class="numbers">04.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span class="numbers">05.</span>
                    <input type="text" name="playersname[]" id="playersname" required />
                    <select name="positions[]" id="positions" required>
                        <option hidden></option>
                        <option value="WK">WK</option>
                        <option value="C">C</option>
                        <option value="AR">AR</option>
                        <option value="BATS">BATS</option>
                        <option value="BOWL">BOWL</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" id="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
            </div>
            <div>
                <input type="submit" name="add-teams" id="submit-btn" value="ADD TEAM">
            </div>
        </form>
        <div>
            <a href="./index.php">MANAGE TEAMS</a>
        </div>
    </section>
    
    
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>