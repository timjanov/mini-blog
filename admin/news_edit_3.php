<?php
	include "inc/bd.php";
	$id = $_POST['id'];
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$text = $_POST['text'];
	$author = $_POST['author'];
	$cat = $_POST['cat'];

	mysql_query("UPDATE data SET title = '$title', description = '$desc', text = '$text', author = '$author', cat = '$cat'  WHERE id = $id");
	header("location:news_edit.php");
?>