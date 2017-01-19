<?php include 'inc/bd.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/left.php'; ?>

  
    <div id="templatemo_right_column">
      <!-- Slider -->
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
        <div class="post_section">
          <span class="comment"><a href="blog_post.php?id=<?php echo $rowd['id']; ?>"><?php echo $rowd[view];?></a></span>
          <h2><a href="blog_post.php?id=<?php echo $rowd['id']; ?>">Aliquam lorem ante dapibus</a></h2>
          <?php echo $rowd['date'];?> | <strong>Author:</strong> <?php echo $rowd[author];?> | <strong>Category:</strong> <a href="#">Freebies</a>
          <img src="images/templatemo_image_01.jpg" alt="image 1" />
          <p>Clean Blog is a Free HTML-CSS Template provided by templatemo.com for everyone. Validate XHTML &amp; >CSS. Donec enim enim, imperdiet quis, mollis a, elementum a, diam. Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nulla et nunc commodo ante ornare imperdiet.</p>
          <a href="blog_post.php?id=<?php echo $rowd['id']; ?>">Continue reading...</a>
        </div>

        <div class="post_section">
          <span class="comment"><a href="blog_post.php?id=<?php echo $rowd['id']; ?>"><?php echo $rowd[view];?></a></span>
          <h2><a href="blog_post.php?id=<?php echo $rowd['id']; ?>">Lorem ipsum dolor sit amet</a></h2>
          <?php echo $rowd['date'];?> | <strong>Author:</strong> <?php echo $rowd[author];?> | <strong>Category:</strong> <a href="#">Web Design</a>
          <img src="images/templatemo_image_02.jpg" alt="image 2" />
          <p>Credits go to <a href="#">Smashing Magazine</a> for icons, <a href="#">Free photos</a> for photos, and <a href="http://www.serie3.info/s3slider/" target="_blank">Serie3</a> for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <a href="blog_post.php?id=<?php echo $rowd['id']; ?>">Continue reading...</a>
        </div>
      </div>
      
    <div class="cleaner"></div>
    </div>
    <!-- end of templatemo_main -->
    <div class="cleaner_h20"></div>

<?php include 'inc/footer.php'; ?>
