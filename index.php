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
    <div class="navbar">
    <ul id="menu">
    	<?php
    		include("./includes/database.php");

    		$get_cats = "select * from categories";

    		$run_cats = mysql_query($get_cats);

    		while ($cats_row=mysql_fetch_array($run_cats)){
    			$cat_id=$cats_row['cat_id'];
    			$cat_title=$cats_row['cat_title'];

    			echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";

    		}

    	?>
    </ul>
    <div id="form">
    	<form method="get" action="results.php" enctype="multipart/form-data">
    		<input type="text" name="search_query" />
    		<input type="sumit" name="search" value="Search Now" />
    	</form>
    </div>
    </div>

    <div class="post_area">
    	this is the Post body</div>
 


    <div id="sidebar">this is the sidebar</div>


    <div class="footer_area">
    	this is the footerr</div>



</div>
</body>
</html>
