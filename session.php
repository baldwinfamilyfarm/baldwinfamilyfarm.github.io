<?php
    session_start();

    $_SESSION["loggedIn"] = true;
    $_SESSION["username"] = "Zach";

    header("Location: home/")
?>
