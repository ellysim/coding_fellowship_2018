<?php

  include ('include-all.php');

$post = getPost($_REQUEST['blogPostId']);

echo "
<div class='leftcolumn'>
  <div class='summerpost'>
    <h2 class='title'>$post[title]</h2> <br>
      <p>$post[body]</p>
  </div>
</div>
      ";

    include ('include/footer.php');


  ?>
