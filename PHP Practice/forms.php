<?php

$errors = array();
if (isset($_REQUEST['JobApplication'])){

  if(!$_REQUEST['Name']){
    $errors['Name'] = 'required';
  }

  if(!$_REQUEST['Phone']){
    $errors['Phone'] = 'required';
  }

  if(sizeof($errors) == 0){

    submitApplication(
      $_REQUEST['Name'],
      $_REQUEST['Phone'],
      $_REQUEST['Position']
    );
  }
}

if(sizeof($errors) > 0){
  foreach($errors as $Index=>$error){
    echo "
      <div> Error in the $Index field: $error </div>";
  }
}

/*redirect*/

echo "
<h1>
        Job Application Form
</h1>
<form action='' method='post'>
        Name:
        <input type='text' name='Name' value='".@$_REQUEST['Name']."'/><br />

        Phone:
        <input type='text' name='Phone' /><br />

        Position:
        <select name='Position'>
                <option value='Fellow'>Coding fellow</option>
                <option value='DevIntern'>Developer intern</option>
                <option value='CrmcIntern'>CRM coach intern</option>
                <option value='Dev'>Full-time developer</option>
                <option value='Crmc'>Full-time CRM coach</option>
        </select>

        <br/><br/>
        <input type='submit' name='JobApplication' value='Submit your application' />
</form>
";

/*include folder*/

function submitApplication($Name, $Phone, $Position){
  die("
    <h1>$Name just applied</h1>
    <p>
      They applied for the $Position Position and you can reach them at $Phone
    </p>
  ");
}



?>
