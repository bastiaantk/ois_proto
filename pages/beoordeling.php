<section class="main beoordeling">
<section>
<h1>Beoordeling</h1>
<div class="overzicht">
	<table>
		<tr>
			<td>Cijfer:</td>
			<td>N.N.B.</td>
		</tr>
		<tr>
			<td>Inleverdatum:</td>
			<td>20 April 2015</td>
		</tr>
		<tr>
			<td>Mutatiedatum:</td>
			<td><?php echo date(); ?></td>
		</tr>
		<tr>
			<td>Gemiddelde:</td>
			<td>N.N.B.</td>
		</tr>
		<tr>
			<td>Weging:</td>
			<td>40%</td>
		</tr>
		<tr>
			<td>Beste:</td>
			<td>N.N.B.</td>
		</tr>
	</table>
</div>
<div class="downloads"> <!-- Float Left -->
	<ul>
		<li>Opdracht1.word</li>
		<li>Correctie_Opdracht1.pdf</li>
	</ul>
</div>
<div class="opmerkingen"> <!-- Floar Right -->
	<p class="wie">Lennart</p>
	<p>Ik heb bestand nagekeken. Deze is terug te vinden als Correctie_opdracht1.pdf onder de downloads</p>
<?php
	foreach ($_POST['commentaar'] as $commentaar){
		echo "<p class=\"wie\">Ik</p>";
		echo "<p class=\"wat\">$commentaar</p>";
	}
?>
<form method="post">
<?php
	foreach ($_POST['commentaar'] as $commentaar){
		echo "<input type=\"hidden\" name=\"commentaar[]\" value=\"$commentaar\">";
	}
?>
	<textarea name="commentaar[]"></textarea>
	<input type="submit" value="Reageren">
</form>
</div>
</section>
</section>
