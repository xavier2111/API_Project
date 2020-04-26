<?php 
session_start();
?>
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- <div class="sidenav">
	<a href="index.php">HoofdPagina</a>
	<a href="database.php">tabel</a>
	<a href="login.php">login</a>
	<?php
		//if(isset($_SESSION['admin'])){
		//	echo "<a href='Functions/login_functions.php?mode=logout'>loguit</a>";
		//}
	?>
</div> -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">HOOFD PAGINA</a>
	<a href="database.php">TABEL</a>
	<a href="login.php">LOGIN</a>
	<?php
		if(isset($_SESSION['admin'])){
			echo "<a href='Functions/login_functions.php?mode=logout'>LOGUIT</a>";
		}
	?>
</div>

<!-- Use any element to open the sidenav -->
<span class="material-icons" style="font-size:60px;color:#FFE81F;" onclick="openNav()">list</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>