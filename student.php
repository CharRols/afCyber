<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include 'PHP/search.php';?>
        <title></title>
    </head>
    <body>
        <?php
            connect("localhost", "root", "");
            echo "You logged in as student";
            echo "<form action = \"\" method = \"post\">";
            echo "<input name = \"search\" type = \"text\">";
            echo "<input name = \"submit\" type = \"submit\" value = \"Search\"";
        ?>
    </body>
</html>
