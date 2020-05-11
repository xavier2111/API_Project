<?php

    function getRows(){
        include 'db_connect.php';

        $sql = "SELECT id, naam, beschrijving
                FROM api_url";
                
        $result = $conn->query($sql);
        while ($row = $result->fetch())
        {
            echo '<a href="theme_page.php?id=' . $row['id'] . '">';
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
