<?php

    require('../db/connect.php');

    $feedbackEmail = $_POST['feedback-email'];
    $comments = $_POST['feedback-comments'];

    $query = " INSERT INTO feedback(Email, Comments) VALUES('$feedbackEmail', '$comments') ";

    // inserting the inputed data into database
    mysqli_query($conn, $query);

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

?>