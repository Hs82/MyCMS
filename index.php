<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<title>Main page</title>
	
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

<div class="contianer">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
            
            <!-- Content Area start -->
            <?php include("includes/post_content.php");?>
            <!-- Content Area ends -->
          
        </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas">
         <!-- Sidebar start-->
            <?php include("includes/sidebar.php");?>
        <!-- Sidebar Ends-->
        </div>
    </div>
</div>



<div class="footer_area">Copyright(c)2015 HSTY . All Rights Reserved.</div>


</body>
</html>
