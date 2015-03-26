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
		<li>
			<a href="">8</a>
		</li>
		<li>
			<a href="">9</a>
		</li>
		<li>
			<a href="">10</a>
		</li>
		<li>
			<a href="">11</a>
		</li>
		<li>
			<a href="">12</a>
		</li>
		<li>
			<a href="">14</a>
		</li>
		<li>
			<a href="">15</a>
		</li>
		<li>
			<a href="">16</a>
		</li>
		<li>
			<a href="">17</a>
		</li>
		<li>
			<a href="">18</a>
		</li>
		<li>
			<button class="week">>></button>
		</li>
		<button id="datepicker">Kalender</button>
	</ul>
</div>
<div class="weekrooster">
	<h2 class="weeknummer">Weekrooster van week 13 2015: 23 Maart - 29 Maart 2015</h2>
	<h2 class="dag">Maandag</h2>
<?php
if($_SESSION['logged_in']){
?>
	<table>
		<tr>
			<td>13.15 - 15.00</td>
			<td>INFOB1VAK1</td>
			<td><a href="index.php?p=vaksite">VAK 1</a></td>
			<td>Hoorcollege</td>
			<td>Groep 1</td>
			<td><a href="https://www.google.nl/maps/@52.082904,5.178317,17z/data=!3m1!4b1!4m2!3m1!1s0x47c6688387c0f997:0x8f29dda98ecbc486" target="_blank">ANDRO</a></td>
			<td>C101</td>
		</tr>
	</table>
<?php 
}
?>
	<h2 class="dag">Dinsdag</h2>
	<Table>
		<tr>
<?php
if($_SESSION['logged_in']){
?>
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
	
<?php 
}
?>
		</tr>
	</table>
	<h2 class="dag">Woensdag</h2>
	<table>
		<tr>
<?php
if($_SESSION['logged_in']){
?>
			<td></td>
<?php 
}
?>
		</tr>
	</table>
	<h2 class="dag">Donderdag</h2>
	<table>
		<tr>
<?php
if($_SESSION['logged_in']){
?>
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
<?php 
}
?>
		</tr>
	</table>
	<h2 class="dag">Vrijdag</h2>
	<table>
		<tr>	
<?php
if($_SESSION['logged_in']){
?>
			<td></td>
<?php 
}
?>
		</tr>
	</table>
	<h2 class="dag">Zaterdag</h2>
	<table>
		<tr>	
<?php
if($_SESSION['logged_in']){
?>
			<td></td>
<?php 
}
?>
		</tr>
	</table>
	<h2 class="dag">Zondag</h2>
	<table>
		<tr>
<?php
if($_SESSION['logged_in']){
?>
			<td></td>
<?php 
}
?>
		</tr>
	</table>
</div>
<button class="planner">Planner</button>