<?php

include('config/config.php');
include('include/db_query.php');

/*Inserting inventory item into MYSQL*/
function InsertInventoryItem($name, $description, $category){
  $result = dbQuery("
    INSERT INTO inventory(name, description, category)
    VALUES('$name', '$description', '$category')
    ")->fetch();
}

/*Display all inventory items */
function GetAllInventoryItems(){
  $result = dbQuery("
    SELECT*
    FROM inventory
  ")->fetchAll();

  return $result;
}

/*Display just one inventory item*/
function GetInventoryItem($inventoryid){
    $result = dbQuery("
      SELECT*
      From inventory
      WHERE inventoryid = $inventoryid
    ")->fetch();

return $result;
}

/*Returns the function Get All Inventory Items*/
$InventoryItem = GetInventoryItem(2);

echo "<pre>";
var_dump($InventoryItem);
echo "</pre>";

/*
$result = dbQuery("
  SELECT *
  FROM inventory
  WHERE invetoryid
")->fetch();
*/

?>
