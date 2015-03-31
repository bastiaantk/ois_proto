<h1>Inleveren van Opdracht</h1>
<ul class="students">
	<li>
<?php
	if(isset($_POST['naam'])){
		echo "Deze student is bij ons niet bekend. Probeer het op studentnummer";
	}
	else{
		foreach($_POST['nummer'] as $student){
			if(is_int($student)){
				echo $student;
			}
		}
	}
?>
	</li>
</ul>
<form method="post" class="nieuwe_student">
<?php  
	foreach($_POST['nummer'] as $student){
		if(is_int($student)){
			echo "<input type=\"hidden\" name=\"nummer[]\" value=\"$student\">";
		}
?>
	<input type="text" value="naam">
	<input type="text" value="nummer[]">
	<input type="submit" value="Toevoegen">
</form>
<?php
	if(isset($_POST['bestand'])){
		echo "Het bestand ". basename( $_FILES["bestand"]["name"]). " is geupload.";
	}
?>
<form method="post" enctype="multipart/form-data" class="nieuw_bestand">
	<input type="file" value="bestand">
	<input type="submit" value="Toevoegen"
</form>
<form class="opmerkingen">
	<textarea>Voeg hier nog eventuele opmerkingen toe voor de docent of studentassistent die de opdracht na moet kijken.</textarea>
	<input type="submit" value="Toevoegen">
</form>