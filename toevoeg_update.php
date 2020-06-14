<DOCTYPE html>
<html lang="nl"> 
	<head> 
		<meta charset="utf-8"> 

		<title> toevoeg/update </title>
		<link rel="stylesheet" type="text/css" href="css/toevoeg_update.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script> 
	    $(function(){
	      $("#sidebar").load("sidenav.php"); 
	    });
    </script>
					
	</head>
	<body>
		<div id="sidebar"></div>
<?php
include 'db_connect.php';
$mode = $_GET["mode"];

if ($mode == "update"){
	$id = $_GET["id"];

		$sql = "SELECT id, url, beschrijving, naam
	        	FROM api_url
	        	WHERE id = $id";
		$result = $conn->query($sql);

		$row = $result->fetch();

		$checkID = $row["id"];
		$checkURL = $row["url"];
		$checkBeschrijving = $row["beschrijving"];
		$checkNaam = $row["naam"];
		$toevoeg_update = "functions/crud_functions.php?mode=wijzigen";
}
		else{
			$checkID= "";
			$checkURL = "";
			$checkBeschrijving = "";
			$checkNaam = "";
			$toevoeg_update = "functions/crud_functions.php?mode=toevoegen";
		}

	?>
		<form action= "<?=$toevoeg_update?>" method="post">
				ID:<input type="text" name="id" value="<?=$checkID?>" placeholder="id"><br>
				URL:<input type="text" name="url" value="<?=$checkURL?>" placeholder="url"><br>
				Beschijving:<input type="text" name="beschrijving" value="<?=$checkBeschrijving?>" placeholder="beschrijving" ><br>
				Naam:<input type="text" name="naam" value="<?=$checkNaam?>" placeholder="naam"><br>
			<input type="submit">
		</form>
	</body>