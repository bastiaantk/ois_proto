<?php
session_start();
$_SESSION['logged_in'] = TRUE;
header('Location: index.php');
?>
