<?php
    $page_uri = "$_SERVER[REQUEST_URI]";
?>

<!-- JQUERY -->
<script src="../assets/javascripts/jquery.min.js"></script>

<!-- MATERIAL DESIGN -->
<!-- <link href="../assets/stylesheets/material-design.min.css" rel="stylesheet" type="text/css"> -->

<!-- MATERIALIZE -->
<link href="../assets/stylesheets/materialize.min.css" rel="stylesheet" type="text/css">
<script src="../assets/javascripts/materialize.min.js" type="text/javascript"></script>

<!-- BOOTSTRAP -->
<!-- <link href="../assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../assets/javascripts/bootstrap.min.js" type="text/javascript"></script> -->

<!-- SIDR -->
<link href="../assets/plugins/sidr/jquery.sidr.dark.css" rel="stylesheet" type="text/css">
<script src="../assets/plugins/sidr/jquery.sidr.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $("#toggle-menu").sidr();
    });
</script>

<div id="sidr">
    <ul>
        <li <?php if (strpos($page_uri, "home")) { echo ' class="active"'; } ?>>
            <a href="../home/">Home</a>
        </li>

        <li <?php if (strpos($page_uri, "about")) { echo ' class="active"'; } ?>>
            <a href="../about/">About</a>
        </li>

        <li <?php if (strpos($page_uri, "blog")) { echo ' class="active"'; } ?>>
            <a href="../blog/">Blog</a>
        </li>

        <li <?php if (strpos($page_uri, "contact")) { echo ' class="active"'; } ?>>
            <a href="../contact/">Contact Us</a>
        </li>

        <li <?php if (strpos($page_uri, "gallery")) { echo ' class="active"'; } ?>>
            <a href="../gallery/">Gallery</a>
        </li>

        <li <?php if (strpos($page_uri, "news")) { echo ' class="active"'; } ?>>
            <a href="../news/">News</a>
        </li>

        <li <?php if (strpos($page_uri, "sales")) { echo ' class="active"'; } ?>>
            <a href="../sales/">Sales</a>
        </li>

        <?php
            if (isset($_SESSION["loggedIn"]))
            {
                echo '<li><a href="../logout/">Sign Out</a></li>';
            }
            else
            {
                echo '<li><a href="../login/">Sign In</a></li>';
                echo '<li><a href="../register/">Register</a></li>';
            }
        ?>
    </ul>
</div>

<!-- CUSTOM -->
<link href="../assets/stylesheets/bff.css" rel="stylesheet" type="text/css">
<script src="../assets/javascripts/bff.js" type="text/javascript"></script>
