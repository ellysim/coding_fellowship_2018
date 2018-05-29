<html>

<body>
  <h1>Calculator with DropBox</h1>
    <form action=""
    <div>
        <label>First Value</label>
        <input type='text' name='variable1'/>
    </div>

    <div>
      <label>Select Operation</label>
          <select size='1' name='operation'>
              <option value=''>Select...</option>
              <option value='+'>Plus</option>
              <option value='-'>Minus</option>
              <option value='*'>Times</option>
              <option value="/">Divided by</option>
            </select>
    </div>

    <div>
        <label>Second Value</label>
        <input type'text' name='variable2' />
    </div>

    <input type='submit' name="calculate">

<?php

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
  return $variable1 / $variable2;
}

if(isset($_REQUEST['variable1']) && ($_REQUEST['operation'] == '+')){
    echo "<h3>The answer is: ".Add($_REQUEST['variable1'],
    $_REQUEST['variable2'])."</h3>";
}

if(isset($_REQUEST['variable1']) && ($_REQUEST['operation'] == '-')){
    echo "<h3>The answer is: ".Subtract($_REQUEST['variable1'],
    $_REQUEST['variable2'])."</h3>";
}

if(isset($_REQUEST['variable1']) && ($_REQUEST['operation'] == '*')){
    echo "<h3>The answer is: ".Multiply($_REQUEST['variable1'],
    $_REQUEST['variable2'])."</h3>";
}

if(isset($_REQUEST['variable1']) && ($_REQUEST['operation'] == '/')){
    echo "<h3>The answer is: ".Divide($_REQUEST['variable1'],
    $_REQUEST['variable2'])."</h3>";
}


  ?>
