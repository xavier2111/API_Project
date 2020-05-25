<?php

    function getRows(){
        include 'db_connect.php';

        $sql = "SELECT id, naam, beschrijving, locatie
                FROM api_url";
                
        $result = $conn->query($sql);
        while ($row = $result->fetch())
        {
            echo "<a href=" . $row['locatie'] . ">";
            echo "<div class='content'>";
            echo "<p>" . "<strong>" . $row['naam'] . "</strong>" . "</p>";
            echo "<p>" . $row['beschrijving'] . "</p>";
            echo "</div>";
            echo "</a>";
            echo "<br>";
            echo "<br>";
        }
    }

?>
