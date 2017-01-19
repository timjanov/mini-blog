<?php include 'inc/bd.php'; ?>
<?php
	$ver = $_GET['del'];
	mysql_query("DELETE FROM comments WHERE id=$del");
	header("location:view_com.php");
?>