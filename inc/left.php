  
   <div id="templatemo_left_column">
        <div id="templatemo_header">
            <div id="site_title">
                <h1><a href="index.php">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
        </div> <!-- end of header -->
        
        <div id="templatemo_sidebar">
            <div id="templatemo_rss">
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
            </div>

            <h4>Categories</h4>
            <ul class="templatemo_list">
				      <?php
                $categories = mysql_query("SELECT * FROM categories");
				        $row =  mysql_fetch_array($categories);
				      do  {
				      ?>
				      <li><a href="post.php?id=<?php echo $row['id'];?>" ><?php echo $row['title'];?></a></li>
				      <?php }while($row = mysql_fetch_array($categories)); ?>
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
            <ul class="templatemo_list">
              <?php
                 $friends = mysql_query("SELECT * FROM friends");
                 $rowfriends = mysql_fetch_array($friends);
              do {
              ?>
              <li><a href="/"><?php echo $rowfriends['link']; ?></a></li>
              <?php } while($rowfriends = mysql_fetch_array($friends)); ?>
            </ul>
        </div> <!-- end of templatemo_sidebar -->
    </div> <!-- end of templatemo_left_column -->