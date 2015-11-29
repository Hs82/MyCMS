<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="style.min.css">

<style>
tr th{

	margin:0px 0px;
	padding:5px 5px;
}
</style>

</head>
<body>

<table>
	<tr>
		<td colspan="8" align="center" bgcolor="#000999" width="100%">View all Posts</td>
	</tr>


	<tr colspan="8" padding="0px 5px">
		<th>Post ID</th>
		<th>Title</th>
		<th>Author</th>
		<th>Image</th>
		<th>Comments</th>
		<th>Edit</th>
		<th>DELETE</th>
	</tr>
<?php
include("includes/database.php");

	$get_posts = "select * from posts";
	$run_posts = mysql_query($get_posts);

	$i = 1;
	while ($row_posts = mysql_fetch_array($run_posts)){

		$post_id = $row_posts['post_id'];
		$post_title = $row_posts['post_title'];
		$post_author = $row_posts['post_author'];
		$post_image= $row_posts['post_image'];

?>
	<tr>
		<td><?php echo $i++ ?></td>
		<td><?php echo $post_title ?></td>
		<td><?php echo $post_author ?></td>
		<td><img src="news_images/<?php echo $post_image ?>" width="100px"; height="100px"></td>
		<td>
		<?php 
			$get_comments = "select * from comments where post_id='$post_id'";
			$run_comments = mysql_query($get_comments);

			$count = mysql_num_rows($run_comments);

			echo $count;
		?></td>
		<td><a href="index.php?edit_post=<?php echo $post_id; ?>">Edit</td>
		<td><a href="includes/delete_post.php?delete_post=<?php echo $post_id; ?>">Delete</td>

	</tr>
<?php } ?>
</table>



</body>
</html>