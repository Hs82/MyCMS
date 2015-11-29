<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="style.min.css">
</head>
<body>

<div class="wrapper">

	<div class="header" style="width:100%; height:30px; background-color:#ff3333">CMS</div>

	<div class="left" style="float:left; background-color:#222; width:25%;height:900px">
	<ul>
		<li><a href="index.php?insert_post">Insert New Post</a></li>
		<li><a href="index.php?view_posts">View all Posts</a></li>
		<li><a href="index.php?insert_cat">Insert New Category</a></li>
		<li><a href="index.php?view_cats">View all Categories</a></li>
		<li><a href="index.php?view_comments">View all Comments</a></li>
		<li><a href="index.php?logout">Admin Logout</a></li>
	</ul>
	</div>

	<div class="right" style="float:right; width:75%">
		<span><strong>To do Taks</strong><p>Pending Commetns(0)</p></span>
		<?php
			if (isset($_GET['insert_post'])){
				include('./includes/insert_post.php');
	
			}
			if (isset($_GET['view_posts'])){
				include('./includes/view_posts.php');

			}
			if (isset($_GET['edit_post'])){
				include('./includes/edit_post.php');

			}
		?>

	</div>


</div>
</body>
</html>
