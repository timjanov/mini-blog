<?php include 'inc/bd.php'; ?>
<?php
	$ver = $_GET['ver'];
	mysql_query("UPDATE comments SET status ='1'  WHERE id=$ver");
	header("location:view_com.php");
?>