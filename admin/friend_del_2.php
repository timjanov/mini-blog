<?php
	include 'inc/bd.php';
	$del = $_GET[del];
	mysql_query("DELETE FROM friends WHERE id = $del");
?>