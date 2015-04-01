<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Universiteit Utrecht - Onderwijs informatica en informatiekunde 2014/2015</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/global.css">
		<meta name="google-translate-customization" content="ed6e67f89e5eb72-f3c62d562943b411-g951d2ee9c06c40de-24"></meta>
	</head>
	<body>
		<div class="container">
			<header>
				<a href="index.php"><img src="images/logo-cs.png" alt="Onderwijs informatica en informatiekunde"></a>
				<div class="menu">
					<button class="language">Translate</button>
					<?php if ($_SESSION['logged_in']) { ?>
					<button class="notifications">Nofiticaties</button>
					<button class="logout">Log uit</button>
					<?php } ?>
					<?php if (! $_SESSION['logged_in']) { ?>
					<button class="login">Log in</button>
					<?php } ?>
					<button class="search">Zoeken</button>
				</div>

				<div class="language popup-menu">
					<h2>Vertalen</h2>
					<button data-lang="english" class="english">English</button>
					<button data-lang="nederlands" class="nederlands">Nederlands</button>
					<div id="google_translate_element"></div>
					<script type="text/javascript">
					function googleTranslateElementInit() {
					  new google.translate.TranslateElement({pageLanguage: 'nl', layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT}, 'google_translate_element');
					}
					</script>
					<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>

				<div class="notifications popup-menu">
					<h2>Notificaties</h2>
					<ul>
						<li class="notification">
							<span class="message">Geen bericht, goed bericht</span>
							<span class="timestamp">16:41 | 31-03-2015</span>
						</li>
						<li class="notification">
							<a href="index.php?p=beoordeling"><span class="message">Beoordeling binnen (B1OIS)</span></a>
							<span class="timestamp">16:41 | 31-03-2015</span>
						</li>
					</ul>
				</div>

				<div class="login popup-menu">
					<h2>Login</h2>
					<form action="login.php">
						<span class="error"></span>
						<label for="login-username">Solis-id</label>
						<input type="text" id="login-username" name="username" placeholder="1234567">
						<label for="login-password">Password</label>
						<input type="password" id="login-password" name="password" placeholder="goed/fout">
						<input type="submit" value="Login">
						<a href="#" class="forgot-password">Wachtwoord kwijt?</a>
					</form>
				</div>

				<div class="search popup-menu">
					<h2>Zoeken</h2>
					<form action="#">
						<input type="search" name="query">
						<input type="submit" value="Zoek">
					</form>
					<ul class="quick">
						<li><a href="#">Zoeklink 1</a></li>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Ipsum</a></li>
						<li><a href="#">Test</a></li>
					</ul>
				</div>

				<div class="clear"></div>
			</header>
			<div class="hero">
			
			</div>
			<div class="content">
				<aside class="sidebar">
					<ul class="nav">
						<li>
							<a href="index.php">Rooster</a>
						</li>
						<li class="vaksites">
							<a href="index.php?p=vaksites">Vaksites</a>
							<ul>
							<li>
								<select>
									<optgroup label="Eerste jaar">
									<option disabled hidden selected>Kies een vak</option>
									<option value="db">Databases</option>
									<option value="b1ois">Ontwerpen interactieve systemen</option>
									<option value="b2wt">Webtechnologie</option>
									</optgroup>
									<optgroup label="Tweede jaar">
									
									</optgroup>
									<optgroup label="Derde jaar">
									
									</optgroup>
								</select>
							</li>
							<?php if ($_SESSION['logged_in']) { ?>
							<li>
								<a href="index.php?p=vaksites&vak=b1ois">Ontwerpen interactieve systemen</a>
							</li>
							<li>
								<a href="index.php?p=vaksites&vak=db">Databases</a>
							</li>
							<?php } ?>
							</ul>
						</li>
						<?php if ($_SESSION['logged_in']) { ?>
						<li>
							<a href="index.php?p=opdrachten">Opdrachten</a>
						</li>
						<li>
							<a href="index.php?p=resultaten">Resultaten</a>
						</li>
						<?php } ?>
						<li>
							<a href="index.php?p=nieuws">Nieuws</a>
						</li>
						<li>
							<a href="index.php?p=informatie">Informatie</a>
						</li>
					</ul>
				</aside>
				<?php
				if (isset($_GET['p']) && !empty($_GET['p'])) {
					$file = 'pages/' . $_GET['p'] . '.php';
					if (file_exists($file)) {
						include($file);
					} else {
						include('pages/404.php');
					}
				}
				else {
					include('pages/home.php');
				}
				?>
				<div class="clear"></div>
			</div>
			<footer>
				<img src="images/logo.png" alt="Universiteit Utrecht">
			</footer>
			<div class="clear"></div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="script/global.js"></script>
	</body>
</html>
