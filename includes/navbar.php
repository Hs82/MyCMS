<div class="navbar">
    <ul id="menu">
    	<?php
    		include("./includes/database.php");

    		$get_cats = "select * from categories";

    		$run_cats = mysql_query($get_cats);

    		while ($cats_row=mysql_fetch_array($run_cats)){
    			$cat_id=$cats_row['cat_id'];
    			$cat_title=$cats_row['cat_title'];

    			echo "
    			<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";

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