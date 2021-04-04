<?php

    // connecting to mysql server
    $con = mysqli_connect('localhost', 'root');

    if($con){
        echo "CONNECTION SUCCESSFUL";
    }else {
        echo "CONNECTION FAILED";
    }

    // connecting to database
    mysqli_select_db($con, 'gcesports');

    $email = $_POST['feedback-email'];
    $comments = $_POST['feedback-comments'];

    $query = " INSERT INTO feedback(Email, Comments) VALUES('$email', '$comments') ";

    // inserting the inputed data into database
    mysqli_query($con, $query);

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

?>