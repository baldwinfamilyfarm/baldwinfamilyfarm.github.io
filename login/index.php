<?php
    session_start();
    require("../db_connections.php");

    if (isset($_POST["submit"]) && isset($_POST["username"]) && isset($_POST["password"]))
    {
        $error = "";

        $username = $_POST["username"];
        $password = $_POST["password"];
        $consult = mysqli_query($db_bff, "SELECT * FROM 'users' WHERE username='$username' AND password='$password'");
        $rows = mysqli_num_rows($consult);

        if ($rows == 1)
        {
            $_SESSION["loggedIn"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;

            header("../index.php");
        }
        else
        {
            $error = "<p style='color: red'>Invalid username or password!</p>";
        }
    }
    else
    {
        $error = "<p style='color: red'>Invalid username or password!</p>";
    }
?>
