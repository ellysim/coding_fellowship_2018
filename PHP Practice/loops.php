<head>
    <title> Loops Practice </title>
</head>

<body>

  <h5>While Loop</h5>
    <?php
      $multiplier = 1;
        while ($multiplier < 10){
          echo "abc ";
        $multiplier++;}
    ?><br><br>

    <h5>Do While Loop</h5>
      <?php
        $multiplier = 1;
          do{
            echo "xyz ";
            $multiplier++;
          }while ($multiplier < 10);
      ?><br><br>

    <h5>For Loop: Counting</h5>
      <?php
          for ($x = 1; $x < 10; $x++){
            echo "$x ";}
       ?><br><br>

    <h5>For Loop: Letters</h5>
      <?php
        $z = "A";
          echo '<ol>';
            for ($y = 1; $y < 7; $y++){
                echo "<li>" ."Item $z </br>". "</li>";
                $z++;}
          echo '</ol>';
      ?>
</body>
