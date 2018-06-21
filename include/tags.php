<?php


function getAllTags(){
  $result = dbQuery("
    SELECT *
    FROM tags
  ");

    return $result->fetchAll();
}

function getTags($blogPostId){
  $result = dbQuery("
    SELECT *
    FROM tags
    INNER JOIN tagrelations ON tagrelations.tagId = tags.tagId
    WHERE tagrelations.tagId = :tagId
  ",
    array(
      "blogPostId" => $blogPostId
    )
  );
    return $result->fetchAll();
}

function getTagPost($tagId){
  $result = dbQuery(
    "
    SELECT *
    FROM tagrelations
    INNER JOIN blog ON blog.tagId = tagrelations.tagId
    WHERE blog.tagId=:tagId
    ",
      array(
        "tagId" => $tagId
      )
    );
    return $result->fetchAll();
}

function getTagsTitle($tagId){
  $result = dbQuery("
    SELECT *
    FROM tags
    INNER JOIN tagrelations ON tagrelations.tagId = tags.tagId
    WHERE tagrelations.tagId = :tagId
  ",
    array(
      "tagId" => $tagId
    )
  );
    return $result->fetchAll();
}



?>
