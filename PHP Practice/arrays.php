<head>
  <title> Array Practices </title>
</head>

<body>
  <h3> Weather Array Practice </h3>

<?php
  $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow","wind");
    Echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6].
    Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].";
 ?><br><br><br>

<h3> City Array Practice </h3>

<p>Print Array with Commas</p>
      <?php
        $cities = array("Tokyo","Mexico City", "New York", "Mumbai", "Seoul",
                        "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
          echo implode(", ", $cities);
      ?>  <br>

<p>Print Array with Loop to Iterate</p>
    <?php
          Foreach($cities as $city){
            echo "$city </br>";}
      ?>  <br>

<p>Sort Loop</p>
    <?php
        sort($cities);
          Foreach($cities as $city){
        echo "$city</br>";}
     ?> <br>

<p>Print Array in Unordered List</p>
     <?php
        echo '<ul>';
          Foreach ($cities as $city){
        echo "<li>" . $city , "</li>";}
        echo '</ul>';
      ?> <br>

  <p>Add More Cities to Array and Sort</p>
     <?php
      $cities1 = array("Tokyo","Mexico City", "New York", "Mumbai", "Seoul",
                      "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London",
                      "Los Angeles", "Calcutta", "Osaka", "Beijing");
        sort($cities1);
          Foreach($cities1 as $city1){
            echo "<li>" .$city1 , "</li>";}
            echo '</ul>';
      ?>

/*Echo mlutidimensional array*/
      echo $blogposts[1]['title']$blogpostid= $_REQEUEST['blogpostid's]
