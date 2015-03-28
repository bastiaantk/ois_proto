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
	</head>
	<body>
		<div class="container">
			<header>
				<img src="images/logo-cs.png" alt="Onderwijs informatica en informatiekunde">
				<div class="menu">
					<button class="language">Taal kiezen</button>
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
					<button data-lang="english" class="english">English</button>
					<button data-lang="nederlands" class="nederlands">Nederlands</button>
				</div>

				<div class="notifications popup-menu">
					<ul>
						<li>
							<span class="message"></span>
							<span class="timestamp"></span>
						</li>
						<li>
							<span class="message"></span>
							<span class="timestamp"></span>
						</li>
					</ul>
				</div>

				<div class="login popup-menu">
					<form>
						<input type="text" name="username">
						<input type="password" name="password">
						<input type="submit" value="Login">
					</form>
				</div>

				<div class="search popup-menu">
					<form>
						<input type="text" name="query">
						<input type="submit" value="Zoek">
					</form>
				</div>

				<div class="clear"></div>
			</header>
			<div class="content">
				<aside class="sidebar">
					<ul class="nav">
						<li>
							<a href="index.php">Rooster</a>
						</li>
						<li>
							<a href="index.php?p=vaksite">Vaksites</a>
						</li>
						<?php if ($_SESSION['logged_in']) { ?>
						<li>
							<a href="index.php">Opdrachten</a>
						</li>
						<li>
							<a href="index.php">Resultaten</a>
						</li>
						<?php } ?>
						<li>
							<a href="index.php">Nieuws</a>
						</li>
						<li>
							<a href="index.php">Informatie</a>
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
