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
        <form action="volleyball.php" method="POST" name="teamform">
            <h3>Volleyball:</h3>
            <div>
                <input type="text" name="sports" id="sports" value="volleyball" hidden>
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
                    <option value="girls">Girls</option>
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
                    <span style="font-weight: 700;">01.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">02.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">03.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">04.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">05.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">06.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="0" hidden>
                </div>
            </div>
            <div id="extras">
                <label for="extras">Extras:</label><br/>
                <div>
                    <span style="font-weight: 700;">01.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">02.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">03.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">04.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">05.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
                    <input type="number" name="extras[]" value="1" hidden>
                </div>
                <div>
                    <span style="font-weight: 700;">06.</span>
                    <input type="text" name="playersname[]" class="playersname" required />
                    <select name="positions[]" class="positions" required>
                        <option hidden></option>
                        <option value="S">S</option>
                        <option value="OH">OH</option>
                        <option value="OPP">OPP</option>
                        <option value="MB">MB</option>
                        <option value="L">L</option>
                        <option value="DS">DS</option>
                        <option value="SS">SS</option>
                    </select>
                    <input type="text" name="jerseynumbers[]" class="jerseynumbers" size="1" required />
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