<h1>Rooster</h1>
<form class="vakkeuze">
	<select name="stjaar">
		<option value=""></option>
		<option value="1">eerste jaar</option>
		<option value="2" selected="">tweede+derde jaar Bachelor</option>
		<option value="4">masterfase</option>
		<option value="a">alle vakken</option>
		<option value="b">alle vakken (uitgebreid)</option>
	</select>
	<select name="vakken">
		<option value=""></option>
		<option value="1">vak 1</option>
		<option value="2">vak 2</option>
		<option value="3">vak 3</option>
	</select>
	<input type="submit" value="Toevoegen">
</form>
<?php
	if($_SESSION['logged_in']){
?>
	<div class="vak">
		VAK 1
		<button class="verwijder">X</button>
	</div>
	<div class="vak">
		VAK 2
		<button class="verwijder">X</button>
	</div>
<?php
}
?>
<div class="weeknav">
	<ul>
		<li>
			<button class="week"><<</button>
		</li>
<?php
for ($i = 8; $i < 19; $i++):
?>
		<li>
			<a href=""><?php echo $i; ?></a>
		</li>
		</li>
<?php
endfor;
?>
		<li>
			<button class="week">>></button>
		</li>
		<li>
			<button id="datepicker">Kalender</button>
		</li>
	</ul>
</div>
<div class="weekrooster">
	<h2 class="weeknummer">Weekrooster van week 13 2015: 23 Maart - 29 Maart 2015</h2>
	<table>
		<tr>
			<td colspan="7" class="dag">Maandag</td>
		</tr>
<?php
if($_SESSION['logged_in']){
?>
		<tr>
			<td>13.15 - 15.00</td>
			<td>INFOB1VAK1</td>
			<td><a href="index.php?p=vaksite">VAK 1</a></td>
			<td>Hoorcollege</td>
			<td>Groep 1</td>
			<td><a href="https://www.google.nl/maps/@52.082904,5.178317,17z/data=!3m1!4b1!4m2!3m1!1s0x47c6688387c0f997:0x8f29dda98ecbc486" target="_blank">ANDRO</a></td>
			<td>C101</td>
		</tr>
<?php 
}
?>
		<tr>
			<td colspan="7" class="dag">Dinsdag</td>
		</tr>
<?php
if($_SESSION['logged_in']){
?>
		<tr>
			<td>13.15 - 15.00</td>
			<td>INFOB2VAK2</td>
			<td><a href="index.php?p=vaksite">VAK 2</a></td>
			<td>Hoorcollege</td>
			<td>Groep 3</td>
			<td><a href="https://www.google.nl/maps/@52.0858396,5.172058,17z/data=!3m1!4b1!4m2!3m1!1s0x47c6689b02418585:0xab442eea8d49bd8e" target="_blank">EDUC</a></td>
			<td>Theatron</td>
		</tr>
		<tr>
			<td>15.15 - 17.00</td>
			<td>INFOB2VAK2</td>
			<td><a href="index.php?p=vaksite">VAK 2</a></td>
			<td>Werkcollege</td>
			<td>Groep 3</td>
			<td><a href="https://www.google.nl/maps/@52.08723,5.1654,17z/data=!3m1!4b1!4m2!3m1!1s0x47c66899b4792659:0x71bd1424c2401f77" target="_blank">BBG</a></td>
			<td>1.63</td>
		</tr>
<?php 
}
?>
		<tr>
			<td colspan="7" class="dag">Woensdag</td>
		</tr>
		<tr>
			<td colspan="7" class="dag">Donderdag</td>
		</tr>
<?php
if($_SESSION['logged_in']){
?>
		<tr>
			<td>9.00 - 10.45</td>
			<td>INFOB1VAK1</td>
			<td><a href="index.php?p=vaksite">VAK 1</a></td>
			<td>Hoorcollege</td>
			<td>Groep 1</td>
			<td><a href="https://www.google.nl/maps/@52.082904,5.178317,17z/data=!3m1!4b1!4m2!3m1!1s0x47c6688387c0f997:0x8f29dda98ecbc486" target="_blank">ANDRO</a></td>
			<td>C101</td>
		</tr>
		<tr>
			<td>11.00 - 12.45</td>
			<td>INFOB1VAK1</td>
			<td><a href="index.php?p=vaksite">VAK 1</a></td>
			<td>Werkcollege</td>
			<td>Groep 1</td>
			<td><a href="https://www.google.nl/maps/@52.082904,5.178317,17z/data=!3m1!4b1!4m2!3m1!1s0x47c6688387c0f997:0x8f29dda98ecbc486" target="_blank">ANDRO</a></td>
			<td><a href="https://www.google.nl/maps/@52.08723,5.1654,17z/data=!3m1!4b1!4m2!3m1!1s0x47c66899b4792659:0x71bd1424c2401f77" target="_blank">BBG</a></td>
		</tr>
		<tr>
			<td>15.15 - 17.00</td>
			<td>INFOB2VAK2</td>
			<td><a href="index.php?p=vaksite">VAK 2</a></td>
			<td>Hoorcollege</td>
			<td>Groep 3</td>
			<td><a href="https://www.google.nl/maps/@52.0858396,5.172058,17z/data=!3m1!4b1!4m2!3m1!1s0x47c6689b02418585:0xab442eea8d49bd8e" target="_blank">EDUC</a></td>
			<td>Theatron</td>
		</tr>
		<tr>
			<td>17.15 - 19.00</td>
			<td>INFOB2VAK2</td>
			<td><a href="index.php?p=vaksite">VAK 2</a></td>
			<td>Werkcollege</td>
			<td>Groep 3</td>
			<td><a href="https://www.google.nl/maps/@52.08723,5.1654,17z/data=!3m1!4b1!4m2!3m1!1s0x47c66899b4792659:0x71bd1424c2401f77" target="_blank">BBG</a></td>
			<td>1.63</td>
		</tr>
<?php 
}
?>
		<tr>
			<td colspan="7" class="dag">Vrijdag</td>
		</tr>
<?php
if($_SESSION['logged_in']){
?>
		<tr>
			<td></td>
		</tr>
<?php 
}
?>
	</table>
</div>
<button class="planner">Planner</button>