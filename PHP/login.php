<?php

function connect($servername, $username, $password) {
    $db = new mysqli($servername, $username, $password, "users");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    setupPage($db);
}

function setupPage($db) {
    if (isset($_POST['login'])) {
        $query = mysqli_query($db, "SELECT Username, Password, Type FROM users");
        while ($row = mysqli_fetch_assoc($query)) {
            if (filter_input(INPUT_POST, 'username') == $row["Username"] && password_verify(filter_input(INPUT_POST, "password"), $row["Password"])) {
                if ($row["Type"] == "student") {
                    header("Location:student.php");
                } else {
                    header("Location:admin.php");
                }
            }
        }
        echo "<script language=\"javascript\">alert(\"Username or Password Invalid\")</script>";
    }
    echo "<form method = \"post\" action = \"\"><p>Username: <input type = \"text\" name = \"username\" required autofocus></p>";
    echo "<p>Password: <input type = \"password\" name = \"password\" required></p>";
    echo "<p><input type = \"submit\" name = \"login\" value = \"Login\"></p>";
}