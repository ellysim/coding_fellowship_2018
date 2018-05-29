<html>
  <head>
      <title>PHP Practice</title>
  </head>

  <body>

<?php
  $name=Elly;
  $age=20;
  Echo "My name is $name and I am $age years old <br>";



// define function
  function getSum ($num1, $num2){
    $sum = $num1 + $num2;
    echo "Sum of the two numbers $num1 and $num2 is : $sum";
  }
// call function
  getSum(8,15);
  ?>

  </body>
</html>


function Add($variable1, $variable2){
  return $variable1 + $variable2;
  }

function Subtract($variable1, $variable2){
  return $variable1 - $variable2;
}

function Multiply($variable1, $variable2){
  return $variable1 * $variable2;
}

function Divide($variable1, $variable2){
  return $variable1 / $variable2
}


<?php

function Add($variable1, $variable2){
  return $variable1 + $variable2;
  }

echo "
    <form action=''>
      <input type='text' name='variable1' />
      <input type='text' name='variable2' />
      <input type='submit' />
    </form>
";

if(isset($_REQUEST['variable1'])){
    echo "<h1>The answer is:
      ".Add($_REQUEST['variable1'],
      $_REQUEST['variable2'])."</h1>";
}
