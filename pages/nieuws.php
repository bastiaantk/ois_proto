<section class="main nieuws">
	<section>
	<?php
	if(isset($_GET['id'])) {
	?>
		<a href="index.php?p=nieuws" class="button back">Terug</a>
	<?php
	}
	switch ($_GET['id']){
		case "1":
	?>
			 <h1>Lennart geeft kleur aan het vak.</h1>
			 <p>Lennart heeft het vak Webtechnolgie de kleur blauw gegeven. <quote>De kleur van Webtech is blauw.</qoute> Aldus Lennart. Het hoorcollege van dit vak is desondanks deze kleurverwijzing gewoon in Ruppert 040 en niet in Ruppert Blauw, wat je wel zou verwachten. Lennart was niet bereikbaar voor commentaar hierop.</p>
			 <span class="datum">25-03-2015</span>
	<?php
			break;
		case "2":
	?>
			<h1>Nieuwe sollicitatieprocedure studentassistenten gestart</h1>
			<p>Je kan nu via de bekende weg solliciteren voor studentassistentschap in het 4e blok. We zoeken studenten die de juiste eigenschappen bezitten.</p>
			<span class="datum">28-03-2015</span>
	<?php
			 break;
		case "3":
	?>
			<h1>UU bibliotheek gevaarlijk</h1>
			<p>De storm raaste door het land op Dinsdag 31 Maart en zorgte voor een tijdelijke gevaarlijke UU bibliotheek. Een van de ramen was opengewaaid en waaiden alle kanten uit. De security van de Universiteit waren snel ter plekke en wisten het plein voor de Spar tegenover de Bieb af te zetten om te voorkomen dat er eventuele slachtoffers zouden vallen als het raam naar beneden zou vallen. Het raam is uiteindelijk veilig weer dichtgegaan en het probleem opgelost. Naast de bibliotheek is er op Rijnswoord Noord ook nog een lantaarnpaal neergesort op de openbare weg en er zijn berichtgevingen dat een schutting in Nieuwegein Zuid het begegeven heeft. Dit laatste heeft niet zozeer te maken met de Uithof, maar wel met de extreme weersomstandigheden waarin onze regio zich gisteren bevond.</p>
			<span class="datum">31-03-2015</span>
	<?php
			break;
		default:
	?>
			<h1>Nieuws</h1>
			<ul>
				<li><a href="index.php?p=nieuws&id=3">UU bibliotheek gevaarlijk</a> <span class="date">(31-03-2015)</span></li>
				<li><a href="index.php?p=nieuws&id=2">Nieuwe sollicitatieprocedure studentassistenten gestart</a> <span class="date">(27-03-2015)</span></li>
				<li><a href="index.php?p=nieuws&id=1">Lennart geeft kleur aan het vak</a> <span class="date">(25-03-2015)</span></li>	
			</ul>
	<?php
			break;
	}
	?>
	</section>
</section>
