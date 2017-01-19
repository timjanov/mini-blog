<?php include 'inc/bd.php'; ?>
<?php
  $edit = $_GET[edit];
  $ress = mysql_query("SELECT * FROM friends WHERE id = $edit");
  $row = mysql_fetch_array($ress);
?>
<form action="friend_edit_3.php" method="post">
  <table border="1" style="margin-top: 80px;" align="center">
    <tr>
      <th>Имя</th>
      <th>Описания</th>
      <th>Редактировать</th>
    </tr>
    <tr>
      <td style="padding: 5px;">
        <input type="text" name="fLink" value="<?php echo $row[link];?>" />
      </td>
      <td>
        <input type="text" name="fTitle" value="<?php echo $row[title];?>" />
      </td>
      <td>
        <input type="hidden" name="id" value="<?php echo $edit ?>">
        <input type="submit" value="Редактировать">
      </td>
    </tr>
  </table>
</form>