<h1>Informatie</h1>
<?php
if(($_GET['IID'])<5){ ?>
<div class="Tags">
	<!--   Inline Block -->
	<ul>
		<li><a href="index.php?p=Informatie&IID=1">Bachelor</a></li>
		<li><a href="index.php?p=Informatie&IID=2">Master</a></li>
		<li><a href="index.php?p=Informatie&IID=3">Minor</a></li>
		<li><a href="index.php?p=Informatie&IID=4">Algemeen</a></li>
	</ul>
</div>
<?php 	} ?>
<div class="Info">
<?php
switch ($_GET['IID']){
	case "2":
		echo "<ul>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Programma</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Inschrijven</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Graduation</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Arbeidsorientatie</a></li>";
		echo "</ul>";
		break;
	case "3":
		echo "<ul>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Informatica</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Informatiekunde</a></li>";
			echo "<li><a href=\"http://students.uu.nl/onderwijs/minors\">Andere Minors</a></li>";
		echo "</ul>";
		break;
	case "4":
		echo "<ul>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Inschrijven op de universiteit</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Studeren in het buitenland</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Onderzoek aan de universiteit</a></li>";
		echo "</ul>";
		break;
	case "5":
		echo "<h1>Informatie artikel</h1>";
		echo "<p>Hier verschijnt de informatie van het door jouw gekozen onderwerp</p>";
		break;
	default: // tevens dus ook IID=1
		echo "<ul>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">1ste jaars</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">2e/3e jaars</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Informatica</a></li>";
			echo "<li><a href=\"index.php?p=Informatie&IID=5\">Informatiekunde</a></li>";
		echo "</ul>";
		break;
	}
?>
</div>
<?php
if(($_GET['IID'])<5){ ?>
<div class="extern"> <!--  Inline block -->
	<ul>
		<li><a href="http://www.stickyutrecht.nl">Sticky</a></li>
		<li><a href="http://www.a-eskwadraat.nl">A-Eskwadraat</a></li>
		<li><a href="http://dgdarc.nl">DGDARC</a></li>
	</ul>
</div>
<?php }?>