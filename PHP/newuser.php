<?php

function connect($servername, $username, $password) {
    $db = new mysqli($servername, $username, $password, "users");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    setupPage($db);
}

function setupPage($db) {
    if (isset($_POST["create"])) {
        if ($_POST["password1"] == $_POST["password2"]) {
            $password = password_hash($_POST["password1"], PASSWORD_DEFAULT);
            $query = "INSERT INTO users (Name, Type, Username, Password) VALUES ('" . $_POST["name"] . "', '" . $_POST["type"] . "', '" . $_POST["username"] . "', '" . $password . "')";
            mysqli_query($db, $query);
        } else {
            echo "<script language=\"javascript\">alert(\"Passwords do not match\")</script>";
        }
    }
    echo "<form method = \"post\" action = \"\"><h1>Create New User</h1><p>Enter username: <input type = \"text\" name = \"username\" required autofocus></p>";
    echo "<p>Enter password: <input type = \"password\" name = \"password1\" required></p>";
    echo "<p>Enter password again: <input type = \"password\" name = \"password2\" required></p>";
    echo "<p>Enter name: <input type = \"text\" name = \"name\" required></p>";
    echo "<p>Select type <select name = \"type\"><option value = \"student\">Student</option><option value = \"admin\">Admin</option><select></p>";
    echo "<p><input type = \"submit\" name = \"create\" value = \"Create\"></p>";
}