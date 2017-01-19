<?php 
	include "inc/bd.php";
	$id = $_GET['edit'];
	$res = mysql_query("SELECT * FROM data WHERE id = $id");
	$rs = mysql_fetch_array($res);
?>

    
	<form action="news_edit_3.php" method="post" style="margin:50px 0 0 20px">
	  
	  <p>
		<label>Название заметки<br>
		  <input type="text" style="width: 60%;" name="title" id="title" value="<?php echo $rs[title];?> ">
		</label>
	  </p>
	  
	  <p>
	    <label>Описания тега<br>
	      <textarea name="description" style="width: 60%;" cols="0" rows="5" id="description"><?php echo $rs[description];?></textarea>
	    </label>
	  </p>
	  
	  <p>
	    <label>Полный текст заметки с тегами<br>
	      <textarea name="text" style="width: 60%;" id="text" cols="0" rows="40" ><?php echo $rs[text];?></textarea>
	    </label>
	  </p>
	  
	  <p>
	    <label>Автора заметки<br>
	      <input type="text" style="width: 60%;" name="author" id="author" value="<?php echo $rs[author];?> ">
	    </label>
	  </p>
	  
	  <p>
	    <label>Категорию заметки<br> 
	    	<?php
	        
	        $result2 = mysql_query("SELECT * FROM data WHERE id =$id");
	        $myrow2 = mysql_fetch_array($result2);
	        
            $result = mysql_query("SELECT title, id FROM categories");
            $myrow = mysql_fetch_array($result);
            $count = mysql_num_rows ($result);
	            
	        ?>
	            
	            <select name="cat" style="width: 60%;" size="<?php echo$count?>">            
	            
	            <?php  do { ?>
	      
	       
	             <option
	             
	             <?php if($myrow2['cat']==$myrow['id']){ echo "selected='selected'";}?>
	             
	              value='<?php echo$myrow['id'];?>'><?php echo $myrow['title'];?></option>
	             
	             
	          <?php  }while($myrow = mysql_fetch_array($result));
	         
	        ?>
	      </select>
	    </label>
	  </p>
	  
	  <p>
	    <input type="hidden" name="id" value="<?php echo $id?>" />
		<input type="submit" style="width: 100px; height: 30px;" name="submit" id="submit" value="Изменить">
	  </p>
	</form>
