<section class="main inleveren">
	<section>
		<div>
		<h1>Inleveren van Opdracht</h1>
		<ul class="students">
			<h2>Practicumpartners</h2>
			<li>
			<?php
				if(isset($_POST['naam'])){
					echo "Deze student is bij ons niet bekend. Probeer het op studentnummer";
				}
				else {
					foreach($_POST['nummer'] as $student){
						if(is_int($student)){
							echo $student;
						}
					}
				}
			?>
			</li>
		</ul>
		<form action="" method="post" class="nieuwe_student">
		<?php 
			foreach($_POST['nummer'] as $student){
				if(is_int($student)){
					echo '<input type="hidden" name="nummer[]" value="$student">';
				}
			}
		?>
			<label>Zoeken op naam</label>
			<input type="search" value="" id="practicum-search">
			<label>Studentnummer</label>
			<input type="text" value="" id="practicum-nummer">
			<input type="submit" value="Toevoegen" class="button">
		</form>
		<?php
			if(isset($_POST['bestand'])){
				echo "Het bestand ". basename( $_FILES["bestand"]["name"]). " is geupload.";
			}
		?>
		</div>
		<div>
		<form method="post" enctype="multipart/form-data" class="nieuw_bestand">
			<input type="file" value="bestand">
			<input type="submit" value="Toevoegen" class="button">
		</form>
		</div>
		<div>
		<form class="opmerkingen">
			<textarea>Voeg hier nog eventuele opmerkingen toe voor de docent of studentassistent die de opdracht na moet kijken.</textarea>
			<br>
			<input type="submit" value="Inleveren" class="button" style="margin-top:20px;float:none;clear: both;">
		</form>
		</div>
	</section>
</section>
