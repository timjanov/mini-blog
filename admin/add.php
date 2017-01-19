<?php include 'inc/bd.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/left.php'; ?>
	
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
          echo "<p style=\"color:green;\">Ваша категория добавлена!</p><hr>";
        } else {
          echo "<p style=\"color:red;\">Ваша категория не добавлена!</p><hr>";
        }
      ?>  
		  <form action="add_2.php" method="post">
  			<table>
  			  <tr>
  				  <td><input type="text" name="add"></td><br>
  			  </tr>
  			  <tr>
  				  <td><input type="submit" value="Добавить"></td>
  			  </tr>
  			</table>
		  </form>
			
      <table border="1" style="margin-top: 10px;">
        <tr>
          <th>Название</th>
        </tr>
      <?php
        $categories = mysql_query("SELECT * FROM categories");
        $row =  mysql_fetch_array($categories);
        do  {
      ?>
        <tr>
          <td style="padding: 5px;"><?php echo $row['title']?></td>
        </tr>
      <?php } while( $row = mysql_fetch_array($categories)); ?>
      </table>

		</div>
		
		<div class="cleaner"></div>
	</div>
	<!-- end of templatemo_main -->
	<div class="cleaner_h20"></div>

<?php include 'inc/footer.php'; ?>