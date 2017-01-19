<?php include "inc/bd.php"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/left.php"; ?>


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

    <!-- Main -->
    <div id="templatemo_main">
      
      <?php
        $id = $_GET['id'];
        $v = mysql_query("SELECT view FROM data WHERE id = $id");
        $rv = mysql_fetch_array($v);
        $new_view = $rv['view'] + 1;
        $new = mysql_query("UPDATE data SET view = $new_view WHERE id = $id");
        $data1 = mysql_query("SELECT * FROM data WHERE id = $id");
        $rowd1 = mysql_fetch_array($data1);
      ?>
      
      <div class="post_section">
        <span class="comment"><a href="fullpost.html"> <?php echo $rowd1[view];?> </a></span>
        <h2><?php echo $rowd1[title];?></h2>
        <?php echo $rowd1['date'];?> | <strong>Author:</strong> <?php echo $rowd1[author];?> | <strong>Category:</strong> <a href="#">Freebies</a>
        <a href="#" /><img src="images/templatemo_image_01.jpg" alt="image" /></a>
        <p><?php echo $rowd1[text];?> </p>
      </div>

      <div class="comment_tab">
        Comments
        <?php
          $count = mysql_query("SELECT COUNT (post) as count FROM comments WHERE post = $id");
          $rc = mysql_fetch_array($count);
          echo $rc['count'];
        ?>
      </div>
      
      <?php
        $comm1 = mysql_query("SELECT * FROM comments WHERE post = $id AND status=1");
        $rcom = mysql_fetch_array($comm1);
        if (mysql_num_rows($comm1) > 0 ) {
          do {
      ?>
      
      <div id="comment_section">
        <ol class="comments first_level">
          <li>
            <div class="comment_box commentbox1">
              <div class="gravatar">
                <img src="images/avator.png" alt="author" />
              </div>
              <div class="comment_text">
                <div class="comment_author"><?php echo $rcom[author];?><span class="date"><?php echo $rcom['date']; ?></span><span class="time">12:30 AM</span></div>
                <p><?php echo $rcom[text];?></p>
                <div class="reply"><a href="#">Reply</a></div>
              </div>
              <div class="cleaner"></div>
            </div>
          </li>
          <ol class="comments"></ol>
        </ol>
      </div>
      
      <?php  
        } while ($rcom = mysql_fetch_array($comm1));
          } else {
            echo "Коментарий пока нет";
          }
      ?>
      
      <!--  Comment Form  -->
      <div id="comment_form">
        <h3>Leave a comment</h3>
        <form action="comment.php" method="post">
          <div class="form_row">
            <label for="name"><strong>Name</strong> *</label>
            <br />
            <input type="text" name="name" id="name" />
          </div>
          <div class="form_row">
            <label for="email"><strong>Email</strong> *</label>
            <br />
            <input type="email" name="email" id="email" />
          </div>
          <div class="form_row">
            <label for="comment"><strong>Comment</strong></label>
            <br />
            <textarea name="comment" id="comment" rows="" cols=""></textarea>
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>" />
          <input type="submit" name="Submit" value="Submit" class="submit_btn" />
        </form>
      </div>
      
    </div>
    <!-- end of templatemo_main -->
    <div class="cleaner"></div>
  </div>
  <!-- end of templatemo_right_column -->
  <div class="cleaner_h20"></div>

<?php include "inc/footer.php"; ?>