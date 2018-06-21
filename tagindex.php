<?php

  include ('include-all.php');


    $showTagTitle = getTagsTitle($_REQUEST['tagId']);
        foreach($showTagTitle as $tagsTitle){
          echo"
            <div class='leftcolumn'>
              <div class='tagpost'>
                <h2 class='tagtitle'><b>Topic: $tagsTitle[tagName]</b></h2>
              <hr class='tags'>
              </div>";
        }

/*  <hr class='tags'>*/
    $tagPosts = getTagPost($_REQUEST['tagId']);
      foreach($tagPosts as $index=>$tagPost){
        echo"
            <div class='post'>
              <h2 class='title'>$tagPost[title]</h2>
              <h5 class='title'>$tagPost[date]</h5><br>
                <img class='pics' src='$tagPost[firstpic]'alt='pics' width= '350px' height= '250px'>
              <p>$tagPost[intro]</p>
            </div>
          </div>

          ";
        }




      /*  echo "
          <div class='leftcolumn'>
            <div class='post'>
              <h2 class='title'>$post[title]</h2>
              <h5 class='title'>$post[date]</h5><br>
                <img class='pics' src='$post[firstpic]'alt='pics' width= '350px' height= '250px'>
              <p>$post[intro]</p>

              <a href='view-post.php?tagId=$index' style'text-align:'center''>Read More</a>
            </div>
          </div>
          ";
    }
*/

    include ('include/footer.php');


 ?>
