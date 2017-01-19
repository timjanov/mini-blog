<?php
	include 'inc/bd.php';
	$del = $_GET['del'];
	mysql_query("DELETE FROM data WHERE id = $del");
?>