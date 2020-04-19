<!DOCTYPE html>

<?php
require_once 'includeDB.php';
$mysqli = open_database_connection();
?>

<html lang="de">
<!-- site: 2 -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="../graphic/icon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../css/main.css" >
<script src="../js/main.js"></script>

<title>
TRS.PAPIROSA.COM - TIME RECORDING SYSTEM BY EDV-KEIL.DE
</title>

</head>

<body>

	<div id="wrapper">
	
		<header>
			<script>
				show0002();
			</script>
		</header>
		
		<nav id="menu">
			<!-- menu: 1 -->
			<ul>
				<li id="menu_label">START</li>
				<li><a href="../index.php">Zur&uuml;ck</a></li>
			</ul>
		</nav>

		<section>
			<!-- body: 1 -->
			<?php
			echo "Email: ". $_POST['in0001']. "<br />";
			echo "Passwort: ". $_POST['in0002']. "<br />";
			?>
			<br>
		</section>
		
		<footer>
			<a href="http://www.edv-keil.de">Erstellt von EDV-Keil &copy; 2020</a>
		</footer>

	</div>
	
</body>

<?php
close_database_connection($mysqli);
?>

</html>