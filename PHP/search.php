<?php

function connect($servername, $username, $password) {
    $db = new mysqli($servername, $username, $password, "users");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    search($db);
}

function search($db) {
    if (isset($_POST["submit"])) {
        if (empty($_POST["search"])) {
            echo "<p>The search term must contain at least one word";
        } else {
            $query = mysqli_query($db, "SELECT Title, URL FROM pages");
            while ($row = mysqli_fetch_assoc($query)) {
                $search = explode(" ", $_POST["search"]);
                foreach ($search as $word) {
                    echo $word;
                    if (strpos($row['Title'], $word) !== FALSE) {
                        echo "<p>" . $row['Title'] . "</p>";
                        break;
                    }
                }
            }        
        }
    }
}

