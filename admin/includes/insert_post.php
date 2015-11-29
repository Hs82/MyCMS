<!DOCTYPE html>
<html lang="ja">
<head>


<!--<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>-->

<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor' );
</script>

<!--<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>-->

<style>
td, tr {
	padding:0px; 
	margin:0px;
}

</style>

</head>

<body>

<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/config.js"></script>
	<form action="insert_post.php" method="post" enctype="multipart/form-data">

		<table width="800" align="center">

			<tr>
				<td colspan="6" align="center"><h1> Insert New Post</h1></td>
			</tr>

			<tr>
				<td align="right"> <strong>Post Title</strong></td>
				<td><input type="text" name="post_title" /></td>
			</tr>

			<tr>
				<td align="right"> <strong>Post Category</strong></td>
				<td><select name="cat">
					<option value="null">Select a Category</option>
					    	<?php
    							include("database.php");

    								$get_cats = "select * from categories";

    								$run_cats = mysql_query($get_cats);

    								while ($cats_row=mysql_fetch_array($run_cats)){
    									$cat_id=$cats_row['cat_id'];
    									$cat_title=$cats_row['cat_title'];

    									echo "<option value='$cat_id'>$cat_title</option>";

    								}

    						?>

    				</select>


				</td>
			</tr>

			<tr>
				<td align="right"> <strong>Post Author</strong></td>
				<td><input type="text" name="post_author" /></td>
			</tr>

			<tr>
				<td align="right"> <strong>Post Keywords</strong></td>
				<td><input type="text" name="post_keywords" /></td>
			</tr>

			<tr>
				<td align="right"> <strong>Post Image</strong></td>
				<td><input type="file" name="post_image" size="60"/></td>
			</tr>

			<tr>
				<td align="right"> <strong>Post Content</strong></td>
				<td><textarea class="ckeditor" cols="80" id="editor1" name="post_content" rows="10"></textarea></td>
				<!--<td><textarea  name="post_content" cols="80" rows="10"></textarea></td>-->
			</tr>

			<tr>
				<td align="center"><input type="submit" name="submit" value="Publish Now"/></td>
			</tr>

	</form>

</body>
</html>

<?php
if (isset($_POST['submit'])){
	
	 $post_title = $_POST['post_title'];
	 $post_date = date('m-d-y');
	 $post_cat = $_POST['cat'];
	 $post_author = $_POST['post_author'];
	 $post_keywords = $_POST['post_keywords'];
	 $post_image = $_FILES['post_image']['name'];
	 $post_image_tmp = $_FILES['post_image']['tmp_name'];
	 $post_content = $_POST['post_content'];

	 if ($post_title=='' OR $post_cat=='null' OR $post_author=='' OR $post_keywords=='' OR $post_image=="" OR $post_content=='') {
	 	echo "<script>alert('Please into')</script>";
	 	exit();
	 }else {
	move_uploaded_file($post_image_tmp, "news_images/$post_image");

	$insert_posts = "insert into posts(category_id, post_title,post_date,post_author,post_keywords,post_image,post_content) values('$post_cat','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content')";

	$run_posts = mysql_query($insert_posts);


		echo "<script>alert('Post has been Published')</script>";

		echo "<script>window.open('insert_post.php','_self')</script>";

	}
}


?>
