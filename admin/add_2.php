<?php
  include 'inc/bd.php';  
  $addCategories = $_POST['add'];
  mysql_query("INSERT INTO  categories (title) VALUES ('$addCategories')");
  header("location:add.php");
?>