<?php

  include ('include-all.php');

  $blogPostId = $_REQUEST['blogPostId'];



  $errors = array();
  if (isset($_REQUEST['Submit'])){

    if(!$_REQUEST['name']){
      $errors['name'] = 'required';
    }

    if(!$_REQUEST['text']){
      $errors['text'] = 'no text';
    }

    if(sizeof($errors) == 0){

      insertComment(
        $_REQUEST['name'],
        $_REQUEST['text']
      );
    }
  }

    foreach($errors as $Index=>$error){
      echo "
        <div> Error in the $Index field: $error </div>";
    }



  echo "


      <div class='comments'>
        <div class='left'>
            <form action='' method ='POST'
              <h2 class='title'>Comments</h2><br>
                <label>Name</label></br>
                  <input type='text' name='name' value='".@$_REQUEST['name']."' /> <br/><br/>
                <label>Leave a Comment</label><br>
                  <textarea name='text'></textarea> <br/>
                    <input type='submit' name='Submit' value='Submit'/>
            </form>
        </div>";


  $showComments = getComments($_REQUEST['blogPostId']);
            foreach($showComments as $postComment){

      echo "
        <div class='right'>
          <hr>
          <h5>$postComment[name]</h5>
        </div>";
}

      echo"
        </div> ";
?>
