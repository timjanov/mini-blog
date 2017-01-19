<?php
	include 'inc/bd.php';
	$del = $_GET[del];
	mysql_query("DELETE FROM categories WHERE id = $del");
	header("location:del.php");
?>