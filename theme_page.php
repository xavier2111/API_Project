<?php
include('functions/functions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>API</title>
		<link rel="stylesheet" type="text/css" href="css/theme_page.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script> 
		    $(function(){
		      $("#sidebar").load("sidenav.php"); 
		    });
		</script>
	</head>
	<body>
		<div id="sidebar"></div>
		<h1 id="title"> Star Wars API</h1>
		<div class="content">
			<div id="info-container">	
				<h1 id="name"></h1>
				<p id="height"></p>
				<p id="mass"></p>
				<p id="birth-year"></p>
				<p id="height"></p>
				<p id="height"></p>
			</div>	
		</div>
		<input type="submit" id="button" class="button" name="select" value="select" />
		<script src="js/sw_app.js" type="text/javascript"></script>
	</body>
</html>