<section class="main beoordeling">
<section>
<h1>Beoordeling</h1>
<div class="column">
	<div class="overzicht">
		<h2>Overzicht</h2>
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
	<div class="downloads">
		<h2>Bestanden</h2>
		<ul>
			<li><a class="docx" href="javascript:alert('Bestand wordt gedownload'); false;">Opdracht1.docx</a></li>
			<li><a class="pdf" href="javascript:alert('Bestand wordt gedownload'); false;">Correctie_Opdracht1.pdf</a></li>
		</ul>
	</div>
</div>
<div class="column right">
	<div class="opmerkingen">
		<h2>Opmerkingen</h2>
		<p class="wie">Lennart:</p> 
		<p>Ik heb bestand nagekeken. Deze is terug te vinden als Correctie_opdracht1.pdf onder de downloads</p>
	<?php
		foreach ($_POST['commentaar'] as $commentaar){
			echo "<p class=\"wie\">Ik</p>";
			echo "<p class=\"wat\">$commentaar</p>";
		}
	?>
		<h3 style="margin-top: 30px;">Reageren</h3>
		<form method="post">
		<?php
			foreach ($_POST['commentaar'] as $commentaar){
				echo "<input type=\"hidden\" name=\"commentaar[]\" value=\"$commentaar\">";
			}
		?>
			<textarea name="commentaar[]"></textarea>
			<input type="submit" class="button" style="float: right;" value="Reageren">
		</form>
	</div>
</div>
</section>
</section>
