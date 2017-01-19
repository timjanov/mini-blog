<?php 
	require 'inc/bd.php';
	$addLink = $_POST['addLink'];
	$addTitle = $_POST['addTitle'];
	mysql_query("INSERT INTO  friends (link, title) VALUES ('$addLink', '$addTitle')");
	header("location:friend_add.php");
?>
