   <div id="sidebar"><!-- Side bar start-->

        <?php
            $get_posts = "select * from posts order by 1 DESC LIMIT 0, 5";

            $run_posts = mysql_query($get_posts);

            while ($row_posts = mysql_fetch_array($run_posts)) {

                $post_title = $row_posts['post_title'];
                $post_image = $row_posts['post_image'];

            
            echo "<h2><a href='includes/details.php?post=$post_id'>$post_title</a></h2>";
            echo "<p><img src='./admin/news_images/$post_image' width='100' height='100px' /></p>";
  

            }



        ?>


    </div>