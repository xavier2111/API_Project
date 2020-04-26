<?php
if(isset($_GET['mode']) && $_GET['mode'] == 'delete')
{
    delete();
}
elseif (isset($_GET['mode']) && $_GET['mode'] == 'toevoegen') 
{
    toevoegen();
}
elseif (isset($_GET['mode']) && $_GET['mode'] == 'wijzigen') 
{
    wijzigen();
}

//Haal de tabel op uit de database
    function getDatabase(){
        include 'db_connect.php';
        $sql = "SELECT *
              FROM api_url
              GROUP BY id";

        $result = $conn->query($sql);
       
        echo "<table>";
            echo "<tr>";
            echo  "<th> id </th>";
            echo  "<th> url</th>";
            echo  "<th> beschrijving </th>";
            echo  "<th> naam </th>";
            echo  "<th> Wijzig </th>";
            echo  "<th> Verwijderen </th>";
            echo "</tr>";
            
            while ($row = $result->fetch()) 
            {
                echo "<tr>";
                echo "<td>"     .$row['id']. "</td>";
                echo "<td>"     .$row['url']. "</td>";
                echo "<td>"     .$row['beschrijving']."</td>";
                echo "<td>"     .$row['naam']."</td>";
                echo "<td>" .'<a href="./toevoeg_update.php?mode=update&&id='. $row['id'] . '">' . 'wijzig '. "</a>" ."</td>";
                echo "<td>" .'<a href="functions/CRUD_functions.php?mode=delete&&id='. $row['id'] . '">' . 'delete '. "</a>" ."</td>";
                echo "</tr>";
            }
        echo "</table>";
        $conn = null;
    }

//Delete rijen uit de database
    function delete(){
    	include '../db_connect.php';

    	$id = $_GET["id"];
    	$stmt = $conn->prepare("DELETE FROM api_url 
    							WHERE id = :id ");

    	$stmt->bindParam(':id', $id); 
    	if ($stmt->execute())
    	{
        	echo "<p>"."<strong>Regisseur verwijderd</strong>"."</p>";
    	}
    	$conn = null;
    	header("Location: ../database.php");
    }


//Voeg rijen toe aan de database
    function toevoegen(){
    	include '../db_connect.php';

		$id = $_POST["id"];
		$url = $_POST["url"];
		$beschrijving = $_POST["beschrijving"];
		$naam = $_POST["naam"];

		$stmt = $conn->prepare("INSERT INTO api_url (id, url, beschrijving, naam) 
								VALUES (:id, :url, :beschrijving, :naam)");
		$stmt->bindParam(':id', $id);
	    $stmt->bindParam(':url', $url);
	    $stmt->bindParam(':beschrijving', $beschrijving);
	    $stmt->bindParam(':naam', $naam);
		 
		if ($stmt->execute())
        {
				echo "<p>"."<strong>Regisseur toegevoegd</strong>"."</p>";
		}			
		$conn = null;
		header("Location: ../database.php");
    }

//Wijzig rijen in de database
    function wijzigen(){
	   include '../db_connect.php';

        $id = $_POST["id"];
        $url = $_POST["url"];
        $beschrijving = $_POST["beschrijving"];
        $naam = $_POST["naam"];

        $stmt = $conn->prepare("UPDATE api_url SET url = :url, beschrijving = :beschrijving, naam = :naam
                                WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->bindParam(':naam', $naam);
         
        if ($stmt->execute())
        {
                echo "<p>"."<strong>Regisseur toegevoegd</strong>"."</p>";
        }           
        $conn = null;
        header("Location: ../database.php");
	}
?>