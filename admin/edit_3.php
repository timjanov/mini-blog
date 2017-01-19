<?php include 'inc/bd.php'; ?>
<?php  
	
	$id = $_POST[id];
	$title = $_POST[catTitle];

	mysql_query("UPDATE categories SET title = '$title' WHERE id = $id");
	header("location:edit.php");
	
?>