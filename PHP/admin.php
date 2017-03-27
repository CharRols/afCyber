<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            if (isset($_SESSION['login_type']) && $_SESSION['login_type'] == "admin" && isset($_SESSION["login_user"])) {
                echo "You logged in as admin";
            } else {
                echo "<a href = \"index.php\">You must login to view this page.</a>";
            }
            
        ?>
    </body>
</html>
