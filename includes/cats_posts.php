<div class="post_area">
    	<?php
        if (isset($_GET['cat'])){
            $cat_id = $_GET['cat'];

  

            $get_posts = "select * from posts where category_id='$cat_id'";


            $run_posts = mysql_query($get_posts);

            while ($row_posts = mysql_fetch_array($run_posts)) {
                $post_id = $row_posts['post_id'];

                $post_title = $row_posts['post_title'];
                $post_date = $row_posts['post_date'];
                $post_author = $row_posts['post_author'];
                $post_image = $row_posts['post_image'];
                $post_content = substr($row_posts['post_content'],0, 300);
                $category_id = $row_posts['category_id'];
            
            echo "<h2><a href='./details.php?post=$post_id'>$post_title</a></h2>";
            echo "<span><i>Posted By</i> <b>$post_author</b></span>";
            echo "<span><b>$post_date</b><span> <span style='color:brown;'><b>Comments(2)</b></span>";
         
            echo "<p>$category_id</p>";
            echo "<p><img src='./admin/news_images/$post_image' width='100' height='100px' /></p>";
            echo "<p>$post_content <a style='float:right;' href='./details.php?post=$post_id'>Read More</a></p>";



            }

        }

        ?>


    </div>