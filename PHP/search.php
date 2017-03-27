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
            $found = FALSE;
            $query = mysqli_query($db, "SELECT Title, URL FROM pages");
            while ($row = mysqli_fetch_assoc($query)) {
                $search = explode(" ", $_POST["search"]);
                foreach ($search as $word) {
                    if (strpos(strtolower($row['Title']), strtolower($word)) !== FALSE) {
                        echo "<p><a href = \"" . $row['URL'] . "\">" . $row['Title'] . "</a></p>";
                        $found = True;
                        break;
                    }
                }
            }
            if ($found == FALSE) {
                echo "</p>No results found</p>";
            }
        }
    }
}

