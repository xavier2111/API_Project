<?php
	include 'functions/functions.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>API</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script> 
	    $(function(){
	      $("#sidebar").load("sidenav.php"); 
	    });
    </script> 
	</head>
	<body>

		<div id="sidebar"></div>
		
		<header>
			<h2 style="opacity: 1 !important;">API Project</h2>
		</header>

		<div class="themes">
			<?php getRows(); ?>	 
		</div>

		<footer>
		  <p>Joop Doop INC.</p>
		</footer>
	</body>
</html>