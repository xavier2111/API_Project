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
		<form action="functions/functions.php" method="post">
			<input type="text" name="sw" required="required">
			<input type="submit" class="button" name="select" value="select" />
		</form>
	</body>
</html>