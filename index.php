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
				<div class="menu">
					<button class="language">Taal kiezen</button>
					<?php if ($_SESSION['logged_in']) { ?>
					<button class="notifications">Notifications</button>
					<button class="notifications">Logout</button>
					<?php } ?>
					<?php if (! $_SESSION['logged_in']) { ?>
					<button class="login">Login</button>
					<?php } ?>
					<button class="search">Search</button>
				</div>

				<div class="language-menu">
					<button data-lang="english" class="english">English</button>
					<button data-lang="nederlands" class="nederlands">Nederlands</button>
				</div>
				<div class="notifications-menu">
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
				<div class="login-menu">
					<form>
						<input type="text" name="username">
						<input type="password" name="password">
						<input type="submit" value="Login">
					</form>
				</div>

				<div class="search-menu">
					<form>
						<input type="text" name="query">
						<input type="submit" value="Zoek">
					</form>
				</div>
			</header>
			<aside class="sidebar">
				<ul class="nav">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="index.php">Vaksites</a>
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
			<section class="main">
				<section class="quick-nav">
					<h1>Direct naar</h1>
					<ul class="nav">
						<li>
							<a href="index.php">Informatie</a>
						</li>
						<li>
							<a href="index.php">Vaksites</a>
						</li>
						<li>
							<a href="index.php">Nieuws</a>
						</li>
						<?php if ($_SESSION['logged_in']) { ?>
						<li>
							<a href="index.php">Opdrachten</a>
						</li>
						<li>
							<a href="index.php">Resultaten</a>
						</li>
						<?php } ?>
					</ul>
					<div class="clear"></div>
				</section>
				<article>
					Tekst;
				</article>
			</section>
			<div class="clear"></div>
		</div>
	</body>
</html>
