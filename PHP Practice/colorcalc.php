<html>

<head>
    <title> Color Calculator </title>
</head>

<body>
  <h1>Color Calculator</h1>

<p> Choose two colors and add them up to see what color they will make! </p>
    <form action="" method="POST">
    <div>
        <label>Color 1</label>
            <select size='1' name='Color1'>
                <option value=''>Select...</option>
                <option value='Red'>Red</option>
                <option value='Yellow'>Yellow</option>
                <option value='Blue'>Blue</option>
              </select>
    </div>



    <div>
        <label>Color 2</label>
            <select size='1' name='Color2'>
              <option value=''>Select...</option>
              <option value='Red'>Red</option>
              <option value='Yellow'>Yellow</option>
              <option value='Blue'>Blue</option>
              </select>
    </div>
<br>

<input type='Submit' name="Add">

<?php
/*Default color */
$color = '#ffffff';

/* Need to make sure that the first thing is set */
if (isset($_REQUEST['Color1'])){


  if ($_REQUEST['Color1'] == 'Red' && $_REQUEST['Color2'] == 'Yellow' ){
    $color='#FFB368';
    }
    elseif ($_REQUEST['Color1'] == 'Yellow' && $_REQUEST['Color2'] == 'Red'){
     $color = '#FFB368';
    }
    elseif ($_REQUEST['Color1'] == 'Yellow' && $_REQUEST['Color2'] == 'Blue'){
      $color = '#B4FF68';
    }
    elseif ($_REQUEST['Color1'] == 'Blue' && $_REQUEST['Color2'] == 'Yellow'){
      $color = '#B4FF68';
    }
    elseif ($_REQUEST['Color1'] == 'Red' && $_REQUEST['Color2'] == 'Blue'){
      $color = '#B368FF	';
    }
    elseif ($_REQUEST['Color1'] == 'Blue' && $_REQUEST['Color2'] == 'Red'){
      $color = '#B368FF	';
    }
    elseif ($_REQUEST['Color1'] == 'Red' && $_REQUEST['Color2'] == 'Red'){
     $color = 'red';
    }
   elseif ($_REQUEST['Color1'] == 'Yellow' && $_REQUEST['Color2'] == 'Yellow'){
    $color = 'yellow';
    }
    elseif ($_REQUEST['Color1'] == 'Blue' && $_REQUEST['Color2'] == 'Blue'){
   $color = '#33ccff';
    }
}

echo '<body style="background:'.$color.'">';

?>

</body>
