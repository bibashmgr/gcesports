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

    <!-- section: news-panel-form -->

    <section class="teams-panel-form">
        <h1>Add Teams</h1>
        <form action="create.php" method="POST" name="teamForm">
            <div>
                <label for="sports">Sports:</label><br/>
                <select name="sports" id="sports" onchange="optChange()" required>
                    <option hidden></option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="cricket">Cricket</option>
                    <option value="badminton">Badminton</option>
                    <option value="tabletennis">Table tennis</option>
                    <option value="chess">Chess</option>
                </select>
                <select name="group" id="group" required>
                    <option hidden></option>
                </select>
                <select name="gender" id="gender" required>
                    <option hidden></option>
                </select>
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
                <select name="teamfaculty" id="teamfaculty" required>
                    <option hidden></option>
                    <option value="COM">Computer</option>
                    <option value="SOF">Software</option>
                </select>
            </div>
            <div>
                <label for="starting">Starting XI:</label>
                <div class="starting">
                </div>
            </div>
            <div>
                <label for="extras">Extras:</label>
                <div class="extras">
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

    <!-- custom scripting -->
    <script type="text/javascript">
        function optChange(){
            var sportVal = document.getElementById("sports").value;
            var group = document.getElementById("group");
            var gender = document.getElementById("gender");
            
            if(sportVal == "football"){
                group.innerHTML = "<option value='team'>Team</option>";
                gender.innerHTML = "<option value='boys'>Boys</option><option value='girls'>Girls</option>";

                teamNamPos(11,5,"football");
            }

            if(sportVal == "basketball"){
                group.innerHTML = "<option value='team'>Team</option>";
                gender.innerHTML = "<option value='boys'>Boys</option><option value='girls'>Girls</option>";
            }

            if(sportVal == "volleyball"){
                group.innerHTML = "<option value='team'>Team</option>";
                gender.innerHTML = "<option value='boys'>Boys</option><option value='girls'>Girls</option>";
            }

            if(sportVal == "cricket"){
                group.innerHTML = "<option value='team'>Team</option>";
                gender.innerHTML = "<option value='boys'>Boys</option>";
            }

            if(sportVal == "badminton"){
                group.innerHTML = "<option value='team'>Team</option><option value='solo'>Solo</option>"
                gender.innerHTML = "<option value='boys'>Boys</option><option value='girls'>Girls</option>"
            }

            if(sportVal == "tabletennis"){
                group.innerHTML = "<option value='team'>Team</option><option value='solo'>Solo</option>"
                gender.innerHTML = "<option value='boys'>Boys</option><option value='girls'>Girls</option>"
            }

            if(sportVal == "chess"){
                group.innerHTML = "<option value='solo'>Solo</option>"
                gender.innerHTML = "<option value='boys'>Boys</option><option value='girls'>Girls</option>"
            }

        }

        function teamNamPos(startNum,exNum,sportName){
                
            var starting = document.getElementsByClassName("starting");
            var extras = document.getElementsByClassName("extras");
            var stmtOne = "";
            var stmtTwo = "";

            for (let i = 0; i < startNum; i++) {
                stmtOne = stmtOne + "<input type='text'/>";
            }

            console.log(stmtOne);
                
        }
    </script>

</body>
</html>