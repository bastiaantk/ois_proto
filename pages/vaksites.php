<section class="main vaksite">
	<?php
	if (!isset($_GET['vak'])) include('pages/vaksites/home.php');
	else {
		if (file_exists('pages/vaksites/'.$_GET['vak'].'.php')) {
			include('pages/vaksites/'.$_GET['vak'].'.php');
		} else {
			include('pages/vaksites/home.php');
		}
	}
	?>
</section>
