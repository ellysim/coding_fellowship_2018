<?php

  include ('include-all.php');

$errors = array();
if (isset($_REQUEST['Submit'])){

  if(!$_REQUEST['name']){
    $errors['name'] = 'required';
  }

  if(!$_REQUEST['date']){
    $errors['date'] = 'required (format: 0000-00-00)';
  }

  if(!$_REQUEST['text']){
    $errors['text'] = 'no text';
  }

  if(sizeof($errors) == 0){

    insertComment(
      $_REQUEST['name'],
      $_REQUEST['date'],
      $_REQUEST['text']
    );
  }
}

  foreach($errors as $Index=>$error){
    echo "
      <div> Error in the $Index field: $error </div>";
  }


echo "


  <form action='' method ='POST'>
    <div class='comments'>
      <h2 class='title'>Comments</h2><br>
        <label>Name</label></br>
          <input type='text' name='name' value='".@$_REQUEST['name']."' /> <br/><br/>
        <label>Date</label><br>
          <input type='text' name='date' value='".@$_REQUEST['date']."'/> <br/><br/>
        <label>Leave a Comment</label><br>
        <textarea rows='8' cols='100' name='text' value='".@$_REQUEST['text']."'></textarea> <br/>
        <input type='submit' name='Submit' value='Submit'/>
    </div>
  </form>

      ";


?>
