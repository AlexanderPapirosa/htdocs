<!DOCTYPE html>
<html lang="de">
<!-- site: 2 -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="../graphic/icon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../css/main.css" >
<link rel="stylesheet" type="text/css" href="../css/thirdParty.css" >
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
				<li id="menu_label">REGISTRIERUNG</li>
				<li id="menu_login"><a href="#" onclick="do0002_1();">Abschlie&szlig;en</a></li>
				<li><a href="../index.php">Zur&uuml;ck</a></li>
			</ul>
		</nav>

		<section>
			<form id = "form0002" action="site0001.php" method="post">
				<table border="0" cellpadding="0" cellspacing="40" align="center" style="width:100%">
					<tr>
						<td align="center">
							<div class="Wrapper">
							<div class="Input">
								<input type="text" onclick="do0002_2('in0003');" name="in0003" class="Input-text" placeholder="Vorname" value="<?php echo isset($_POST['in0003'])?$_POST['in0003']:''; ?>" />
								<label for="input" class="Input-label">Vorname</label>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<div class="Wrapper">
							<div class="Input">
								<input type="text" onclick="do0002_2('in0004');" name="in0004" class="Input-text" placeholder="Name" value="<?php echo isset($_POST['in0004'])?$_POST['in0004']:''; ?>" />
								<label for="input" class="Input-label">Name</label>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<div class="Wrapper">
							<div class="Input">
								<input type="text" name="in0005" class="Input-text" placeholder="Personalnummer" value="<?php echo isset($_POST['in0005'])?$_POST['in0005']:''; ?>" />
								<label for="input" class="Input-label">Personalnummer</label>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<div class="Wrapper">
							<div class="Input">
								<input type="text" onclick="do0002_2('in0006');" name="in0006" class="Input-text" placeholder="E-Mail" value="<?php echo isset($_POST['in0006'])?$_POST['in0006']:''; ?>" />
								<label for="input" class="Input-label">E-Mail</label>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<div class="Wrapper">
							<div class="Input">
								<input type="password" onclick="do0002_2('in0007');" name="in0007" class="Input-text" placeholder="Passwort" />
								<label for="input" class="Input-label">Passwort</label>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<div class="Wrapper">
							<div class="Input">
								<input type="password" onclick="do0002_2('in0008');" name="in0008" class="Input-text" placeholder="Passwort Wiederholung" />
								<label for="input" class="Input-label">Passwort Wiederholung</label>
							</div>
							</div>
						</td>
					</tr>
				</table>
			</form>
			
			<br>
		</section>
		
		<footer>
			<a href="http://www.edv-keil.de">Erstellt von EDV-Keil &copy; 2020</a>
		</footer>

	</div>
	
</body>

</html>