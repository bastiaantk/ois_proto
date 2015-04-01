<section class="main informatie">
	<?php
	if ($_GET['id'] == 5) {
	?>
	<section>
		<a href="index.php?p=informatie" class="button back">Terug</a>
		<h1>Informatie artikel</h1>
		<p>Hier verschijnt de informatie van het door jouw gekozen onderwerp</p>
	</section>
	<?php
	} else {
	?>
		<section>
		<h1>Informatie</h1>
		<div class="column">
			<h2>Master</h2>
			<ul>
				<li><a href="index.php?p=Informatie&id=5">Programma</a></li>
				<li><a href="index.php?p=Informatie&id=5">Inschrijven</a></li>
				<li><a href="index.php?p=Informatie&id=5">Graduation</a></li>
				<li><a href="index.php?p=Informatie&id=5">Arbeidsorientatie</a></li>
			</ul>
		</div>
		<div class="column">
			<h2>Minor</h2>
			<ul>
				<li><a href="index.php?p=Informatie&id=5">Informatica</a></li>
				<li><a href="index.php?p=Informatie&id=5">Informatiekunde</a></li>
				<li><a href="http://students.uu.nl/onderwijs/minors">Andere Minors</a></li>
			</ul>
		</div>
		<div class="column">
		<h2>Bachelor</h2>
		<ul>
			<li><a href="index.php?p=Informatie&id=5">1ste jaars</a></li>
			<li><a href="index.php?p=Informatie&id=5">2e/3e jaars</a></li>
			<li><a href="index.php?p=Informatie&id=5">Informatica</a></li>
			<li><a href="index.php?p=Informatie&id=5">Informatiekunde</a></li>
		</ul>
		</div>
		<div class="column">
		<h2>Praktisch</h2>
		<ul>
			<li><a href="index.php?p=Informatie&id=5">Inschrijven op de universiteit</a></li>
			<li><a href="index.php?p=Informatie&id=5">Studeren in het buitenland</a></li>
			<li><a href="index.php?p=Informatie&id=5">Onderzoek aan de universiteit</a></li>
		</ul>
		</div>
		<div class="column">
		<h2>Extern</h2>
		<ul>
			<li><a href="http://www.stickyutrecht.nl">Sticky</a></li>
			<li><a href="http://www.a-eskwadraat.nl">A-Eskwadraat</a></li>
			<li><a href="http://dgdarc.nl">DGDARC</a></li>
		</ul>
		</div>
		<div class="clear"></div>
	</section>
	<?php
	}
	?>
</section>
