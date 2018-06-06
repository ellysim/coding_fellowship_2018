<?php

    include ('include-all.php');

      $posts = getAllBlogPosts();

    foreach($posts as $index=>$post){
        echo "
          <div class='leftcolumn'>
            <div class='post'>
              <h2 class='title'>$post[title]</h2>
              <h5 class='title'>$post[date]</h5><br>
                <img class='pics' $post[pics]' width= '350px' height= '250px'>
              <p>$post[intro]</p>

              <a href='view-post.php?blogPostId=$index' style'text-align:'center''>Read More</a>
            </div>
          </div>
          ";
    }

    include ('include/footer.php');


 ?>
