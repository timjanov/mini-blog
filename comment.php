<?php
	include "inc/bd.php";
	$id = $_POST['id'];
	$addName = $_POST[name];
	$addComment = $_POST[comment];

	mysql_query("INSERT INTO comments (post, author, text ) VALUES ($id,'$addName', '$addComment')");
	header("location:blog_post.php?id=$id");
?>