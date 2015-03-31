<section class="main home">
	<section class="quick-nav">
		<h1>Direct naar</h1>
		<ul class="nav">
			<li>
				<a href="index.php">Informatie</a>
			</li>
			<li>
				<a href="index.php?p=vaksites">Vaksites</a>
			</li>
			<?php if ($_SESSION['logged_in']) { ?>
			<li>
				<a href="index.php?p=vaksites&vak=b1ois">Ontwerpen interactieve systemen</a>
			</li>
			<li>
				<a href="index.php?p=vaksites&vak=db">Databases</a>
			</li>
			<?php } ?>
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