<?php
	session_start();
	if($_SESSION['admin'] == false || !isset($_SESSION['admin']))
	{
		header("location: login.php");
	}

?>

<DOCTYPE html>
<html lang="nl"> 
	<head> 
		<meta charset="utf-8"> 

		<title> Database </title>
	    <link rel="stylesheet" type="text/css" href="css/database.css">
	   	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script> 
		    $(function(){
		      $("#sidebar").load("sidenav.php"); 
		    });
		</script>
	</head>
	<body>
		<div id="sidebar"></div>
		<h3>Database</h3> 
	  	<a href="toevoeg_update.php?mode=toevoegen"> <strong>Nieuwe rij toevoegen</strong></a>
	  	<br>
	  	<br>

		<?php
	    	include "functions/crud_functions.php";
	    	getDatabase();
		?>

	</body>
</html>