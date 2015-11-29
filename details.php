<div class="post_area">
    	<?php

            if (isset($_GET['post'])){

                $post_id = $_GET['post'];

    
            $get_posts = "select * from posts where post_id='$post_id'";

            $run_posts = mysql_query($get_posts) or die('query error' . mysql_error());

            while ($row_posts = mysql_fetch_array($run_posts)) {

                $post_title = $row_posts['post_title'];
                $post_date = $row_posts['post_date'];
                $post_author = $row_posts['post_author'];
                $post_image = $row_posts['post_image'];
                $post_content = $row_posts['post_content'];

            
            echo "<h2>$post_title</a></h2>";
            echo "<span><i>Posted By</i> <b>$post_author</b></span>";
            echo "<span><b>$post_date</b><span> <span style='color:brown;'><b>Comments(2)</b></span>";
         
            echo "<p>$category_id</p>";
            echo "<p><img src='./admin/news_images/$post_image' width='400' height='400px' /></p>";
            echo "<p>$post_content </p>";



            }

        }

        ?>
        <div>
            <h2>Post a Comment</h2>
    <form method="post" action="details.php?post=<?php echo $post_id; ?>">
        <table width="730">
            <tr>
                <td><strong>Your Name </strong></td>
                <td><input type="text" name="comment_name" /></td>
            </tr>
            <tr>
                <td><strong>Your Email </strong></td>
                <td><input type="text" name="comment_email" /></td>
            </tr>
            <tr>
                <td><strong>Your Comment </strong></td>
                <td><textarea name="comment" cols="25" rows="16"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Post Comment" /></td>
            </tr>

    </form>
</div>

    </div>


    <!-- Sidebar start-->
    <?php include("includes/sidebar.php");?>
    <!-- Sidebar Ends-->

       <div class="footer_area">
        this is the footerr</div>
