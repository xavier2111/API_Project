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

			<div class="input-form">
				<div class="input-field">
					<input type="text" class="input" name="character" id="character" autofocus="true" placeholder="luke skywalker"><br>
				</div>
				<div class="input-field">
					<input type="button" class="input" name="select" id="button" value="Zoek" />
				</div>
			</div>

			<br>

			<div class="characters" id="characters">
			</div>
			
		</div>
		<script src="js/sw_app.js" type="text/javascript"></script>
	</body>
</html>