<?php


function getAllBlogPosts(){
  $result = dbQuery("
    SELECT *
    FROM blog
  ");

  return $result->fetchAll();
}

function getPost($blogPostId){
  $result = dbQuery("
      SELECT *
      FROM blog
      WHERE blogPostId = :blogPostId
    ",
  array(
    "blogPostId" => $blogPostId,
        )
    );

    return $result->fetch();
}

/*puts comment in DBQEURY*/

function insertComment($blogPostId){
  $name=$_REQUEST['name'];
  $text=$_REQUEST['text'];

  $result = dbQuery("
  INSERT INTO comments (blogPostId,name,text)
  VALUE (:blogPostId,:name,:text)
    ",
    array(
      "blogPostId"=>$blogPostId,
      "name"=> $name,
      "text"=>$text,
    )
  );
}

function getComments($blogPostId){
  $result = dbQuery("
    SELECT*
    FROM comments
    WHERE blogPostId = :blogPostId
  ",
  array(
    "blogPostId" => $blogPostId,
    )
  );

  return $result->fetchAll();
}

 ?>
