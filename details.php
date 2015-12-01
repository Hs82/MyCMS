<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <title>details page</title>
    
    <link href="./styles/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>
<body> 
    <!-- Navagation Bar start -->
    <?php include("includes/navbar.php");?>
    <!-- Navagation Bar Ends-->

    <div class="row ">
        <div class="col-xs-12 ">   
                <div class="post_area">
                    	<?php
                        include("includes/database.php");

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

                            echo "<div class='list_box col-xs-6 col-lg-4'>";
                            echo "<h2>$post_title</a></h2>";
                            echo "<span><i>Posted By</i> <b>$post_author</b></span>";
                            echo "<span><b>$post_date</b><span> <span style='color:brown;'><b>Comments(2)</b></span>";
                         
                            echo "<p>$category_id</p>";
                            echo "<p><img src='./admin/news_images/$post_image' width='400' height='400px' /></p>";
                            echo "<p>$post_content </p>";
                            echo "</div>";


                            }

                        }

                        echo "</div></div>";
                        include("./includes/comment_form.php");
                        ?>
                      
    </div>


<div class="footer_area">Copyright(c)2015 HSTY . All Rights Reserved.</div>

</body>
</html>

  

