<?php include 'inc/bd.php'; ?>
<?php
  $edit = $_GET[edit];
  $ress = mysql_query("SELECT * FROM categories WHERE id = $edit");
  $row = mysql_fetch_array($ress);
?>
<form action="edit_3.php" method="post">
  <table border="1" align="center" style="margin-top: 80px;">
    <tr>
      <th>Названия</th>  
      <th>Редактировать</th>
    </tr>
    <tr>
      <td style="padding: 5px;">
        <input type="text" name="catTitle" value="<?php echo $row[title];?>">
      </td>
      <td>
        <input type="hidden" name="id" value="<?php echo $edit?>">
        <input type="submit" value="Редактировать">
      </td>
    </tr>
  </table>
</form>