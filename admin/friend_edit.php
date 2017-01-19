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
      
      <form action="friend_edit_2.php" method="post">
        <table border="1">
          <tr>
            <th>Имя</th>  
            <th>Описания</th>  
            <th>Редактировать</th>
          </tr>
          <tr>
          <?php
            $friends = mysql_query("SELECT * FROM friends");
            $row =  mysql_fetch_array($friends);
            do  {
          ?>
            <td style="padding: 5px;"><?php echo $row['link'];?></td>
            <td style="padding: 5px;"><?php echo $row['title'];?></td>
            <td style="padding: 5px;"><a href="friend_edit_2.php?edit=<?php echo $row[id]?> ">редактировать</a></td>
          </tr>
          <?php } while( $row = mysql_fetch_array($friends)); ?>
        </table>
      </form>
			
		</div>
		
		<div class="cleaner"></div>
	</div>
	<!-- end of templatemo_main -->
	<div class="cleaner_h20"></div>

<?php include 'inc/footer.php'; ?>