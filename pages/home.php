<section class="main home">
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
	<section class="rooster">
		<?php include('includes/rooster.php'); ?>
	</section>
</section>