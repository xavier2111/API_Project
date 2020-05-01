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
		<div class="content">
			<h1 id="title"> Star Wars API</h1>
			<div class="info-container">
				<h1 id="name">Vul een naam in</h1>
				<p id="height"></p>
				<p id="mass"></p>
				<p id="birth-year"></p>
			</div>	

			<div class="input-form">
				<div class="input-field">
					<input type="text" name="character" id="character"><br>
				</div>
				<div class="input-field">
					<input type="submit" id="button" class="button" name="select" value="select" />
				</div>
			</div>
		</div>
		<script src="js/sw_app.js" type="text/javascript"></script>
	</body>
</html>