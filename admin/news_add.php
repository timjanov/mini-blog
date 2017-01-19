<?php include "inc/bd.php"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/left.php"; ?>

<?php
  $title = $_POST['title'];
  
  $description = $_POST['description'];
  
  $text = $_POST['text'];
    
  $author = $_POST['author'];
    
  $cat = $_POST['cat'];

  $date = date("Y-m-d");

  $result = mysql_query("INSERT INTO data (title,date,description,text,author,cat) VALUES ('$title','$date','$description','$text','$author','$cat')");
?>
	
	<div id="templatemo_right_column">

      <div id="featured_project">
        <div id="slider">
          <ul id="sliderContent">
            <li class="sliderImage">
              <a href=""><img src="images/slider/1.jpg" alt="1" /></a>
              <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
            </li>
            <li class="sliderImage">
              <a href=""><img src="images/slider/2.jpg" alt="2" /></a>
              <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
            </li>
            <li class="sliderImage">
              <img src="images/slider/3.jpg" alt="3" />
              <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
            </li>
            <li class="sliderImage">
              <img src="images/slider/4.jpg" alt="4" />
              <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </li>
            <li class="clear sliderImage"></li>
          </ul>
        </div>
      </div>
		
		<div id="templatemo_main">
      <?php  
        if ($result == 'true') {
          echo "<p style=\"color:green;\">Ваша заметка добавлена!</p><hr>";
        } else {
          echo "<p style=\"color:red;\">Ваша заметка не добавлена!</p><hr>";
        }
      ?>  
      <!-- form -->
      <form action="news_add.php" method="post" name="form1">
        <p>
          <label>Введите название заметки<br>
            <input type="text" name="title" id="title">
          </label>
        </p>
        <p>
          <label>Введите краткое описания тега<br>
            <textarea name="description" cols="40" rows="5" id="description"></textarea>
          </label>
        </p>
        <p>
          <label >Введите полный текст заметки с тегами<br>
            <textarea name="text"  id="text" cols="40" rows="20"></textarea>
          </label>
        </p>
        <p>
          <label>Введите автора заметки<br>
            <input type="text" name="author" id="author">
          </label>
        </p>
        <p>
          <label>Выберите категорию заметки<br>
            <select name="cat" size="0">
              <?php
                $result = mysql_query("SELECT title, id FROM categories");
                if (!$result) {
                  echo "<p>Запрос на выборку данных из базы не прошел. Наишите об этом администратору admin@mail.ru<br><strong> Код ошибки:</strong></p>";
                  exit(mysql_error());
                }
                if (mysql_num_rows($result) > 0) {
                    $myrow = mysql_fetch_array($result);
                  do {
                    printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["title"]);
                  } while($myrow = mysql_fetch_array($result));
                } else {
                  echo"<p>Информация по запросу не может быть извлечена,в таблице нет записей.</p>";
                  exit();
                }
              ?>
            </select>
          </label>
        </p>
        <p>
          <input type="submit" name="submit" id="submit" value="Занести в базу">
        </p>
        <p>&nbsp;</p>
      </form>
      <!-- end form -->

    </div> <!-- end of templatemo_main -->
		
		<div class="cleaner"></div>
	</div><!-- end of templatemo_right -->

	<div class="cleaner_h20"></div>

<?php include 'inc/footer.php'; ?>