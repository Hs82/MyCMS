<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>hh</title>
    
    <link href="./styles/style.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="contianer">

    <div class="head">

    </div>

    <!-- Navagation Bar start -->
    <?php include("navbar.php");?>

    <!-- Navagation Bar Ends-->



    <!-- Content Area start -->

<div class="post_area">


        <?php
            if (isset($_GET['search'])){

            $get_query = $_GET['search_query'];

            if($get_query==''){
                echo "<script>alert('Please write a keyword')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
                exit();
            }

            $get_posts = "select * from posts where post_keywords like '%$get_query%'";




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
            echo "<span><b>$post_date</b><span> <span style='color:brown;'><b></b></span>";
         
            echo "<p>$category_id</p>";
            echo "<p><img src='./admin/news_images/$post_image' width='100' height='100px' /></p>";
            echo "<p>$post_content <a style='float:right;' href='./details.php?post=$post_id'>Read More</a></p>";



            }
        } else 

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
            echo "<span><b>$post_date</b><span> <span style='color:brown;'><b></b></span>";
         
            echo "<p>$category_id</p>";
            echo "<p><img src='./admin/news_images/$post_image' width='100' height='100px' /></p>";
            echo "<p>$post_content <a style='float:right;' href='./details.php?post=$post_id'>Read More</a></p>";



            }

        }


        ?>



    </div>
    <!-- Content Area ends -->

    <!-- Sidebar start-->
    <?php include("includes/sidebar.php");?>
    <!-- Sidebar Ends-->
 


    <div class="footer_area">
        this is the footerr</div>



</div>
</body>
</html>
