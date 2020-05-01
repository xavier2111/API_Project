<?php
//"https://swapi.co/api/people/?search=" . $search . ""
//$row['url'] . $search . ""
    
     
     if(isset($_POST['sw'])){
        $search = $_POST['sw'];
         StarWarsAPI($search);
     }


    function StarWarsAPI($search){
        include '../db_connect.php';
        $sql = "SELECT url
        FROM api_url
        WHERE id=1";

        $result = $conn->query($sql);
        $row = $result->fetch();
        // create curl resource
        $url = $row['url'];
        
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $url.$search );

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        
        $data = json_decode($output, true);
        $character = array("name"=>$data["results"]["0"]["name"], 
                            "height"=>$data["results"]["0"]["height"],
                            "mass"=>$data["results"]["0"]["name"],
                            "hair_color"=>$data["results"]["0"]["hair_color"],
                            "eye_color"=>$data["results"]["0"]["eye_color"],
                            "birth_year"=>$data["results"]["0"]["birth_year"],
                            "gender"=>$data["results"]["0"]["gender"]);
        // $name = $data["results"]["0"]["name"];
        // $height = $data["results"]["0"]["height"];
        // $mass = $data["results"]["0"]["mass"];
        // $hair_color = $data["results"]["0"]["hair_color"];
        // $eye_color = $data["results"]["0"]["eye_color"];
        // $birth_year = $data["results"]["0"]["birth_year"];
        // $gender = $data["results"]["0"]["gender"];
        // $homeworld = $data["results"]["0"]["homeworld"];

        print_r($character["name"]);
        //echo $name;
        
    }

            

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
