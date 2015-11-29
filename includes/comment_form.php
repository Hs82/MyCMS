<?php
 if (isset($_GET['post'])){

            $post_id = $_GET['post'];

    
            $get_posts = "select * from posts where post_id='$post_id'";

            $run_posts = mysql_query($get_posts) or die('query error' . mysql_error());

            $row=mysql_fetch_array($run_post);
            $post_new_id=$row['post_id'];

?>
<div>
    <h2>Post a Comment</h2>
    <form method="post" action="details.php?post=<?php echo $post_new_id; ?>">
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
                <td><textarea name="comment_text" cols="25" rows="16"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Post Comment" /></td>
            </tr>

    </form>
</div>

<?php 
    
    include("includes/database.php");

    if (isset($POST['submit'])){

        $post_com_id = $post_new_id;

        $comment_name = $_POST['comment_name'];
        $comment_email = $_POST['comment_email'];
        $comment_text = $_POST['comment_text'];
        $status = "unapprove";

        if($comment_name=='' OR $comment_email=='' OR $comment_text==''){
            echo "<script>alert('Please fill in all blanks')</script>";
            echo "<script>window.open('details.php?post=$post_id')</script>";
            exit();

        }
        else {
            $query_comment = "insert into comments (post_id, comment_name, comment_email, comment_text, status) values ('$post_com_id', $comment_anme','$comment_email', '$comment_text','status')";

            $run_query = mysql_query($query_comment);
                echo "<script>alert('your comment will be published after approval!')</script>";
                echo "<script>window.open('details.php?post=$post_id')</script>";

        }
    }

?>