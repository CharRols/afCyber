<?php

function connect($servername, $username, $password) {
    $db = new mysqli($servername, $username, $password, "users");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    setupPage($db);
}

function setupPage($db) {
    session_start();
    if (isset($_POST['login'])) {
        $query = mysqli_query($db, "SELECT Username, Password, Type FROM users");
        while ($row = mysqli_fetch_assoc($query)) {
            if (filter_input(INPUT_POST, 'uname') == $row["Username"] && password_verify(filter_input(INPUT_POST, "pass"), $row["Password"])) {
                if ($row["Type"] == "student") {
                    $_SESSION['login_user'] = $row["Username"];
                    $_SESSION['login_type'] = $row["Type"];
                    header("Location:student.php");
                } else {
                    $_SESSION['login_user'] = $row["Username"];
                    $_SESSION['login_type'] = $row["Type"];
                    header("Location:admin.php");
                }
            }
        }
        echo "<script language=\"javascript\">alert(\"Username or Password Invalid\")</script>";
    }
}