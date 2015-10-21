<?php
    session_start();
    require("../d61616c3e2a6cf59a0cc435a66c091d4.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Baldwin Family Farm - Home</title>
</head>

<body>

    <!-- <ul id="menu" class="dropdown-content">
        <li><a href="#">Home</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a class="center brand-logo">Baldwin Family Farm</a>
            <ul class="left">
                <li><a class="dropdown-button" href="#" data-activates="menu">Menu</a></li>
            </ul>
        </div>
    </nav> -->

    <div class="bff-header">
        <table cellspacing="0px" cellpadding="0px" align="center">
            <tr>
                <td width="15%" class="left-align">
                    <button class="bff-menu-button btn waves-effect waves-dark grey lighten-5" id="toggle-menu" href="sidr">
                        <img src="../assets/images/menu-button.png" id="toggle-menu" href="sidr">
                    </button>
                </td>
                <td width="60%" class="center-align">
                    <span class="bff-header-title">
                        <a href="#">Baldwin Family Farm</a>
                    </span>
                </td>
                <td width="15%" class="right-align">
                    <!-- <?php
                        if (isset($_SESSION["loggedIn"]))
                        {
                            echo '<span style="inline">Logged in as ' . $_SESSION["username"] . '<button style="display:inline" class="btn waves-effect waves-dark grey lighten-5" href="../logout">Sign Out</button></span>';
                        }
                    ?> -->
                </td>
            </tr>
        </table>
    </div>

    <br />
    <br />
    <br />
    
    <div class="jumbotron"></div>

    <!-- <div class="container">
        <div class="row">
            <div class="col s9">
                <h5>Who are we?</h5>
            </div>

            <div class="col s3">
                <h5>Contact</h5>
            </div>
        </div>
    </div> -->
</body>
</html>
