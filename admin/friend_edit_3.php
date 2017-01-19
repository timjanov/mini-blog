<?php include 'inc/bd.php'; ?>
<?php  
	
	$id = $_POST[id];
	$link = $_POST[fLink];
	$title = $_POST[fTitle];

	mysql_query("UPDATE friends SET link = '$link', title = '$title'  WHERE id = $id");
	header("location:friend_edit.php");
	
?>