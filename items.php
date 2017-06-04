<?php

require 'Controller/ItemController.php';
$itemController = new ItemController();

if(isset($_POST['types']))
{
    //Fill page with coffees of the selected type
    $itemTables = $itemController->CreateItemTables($_POST['types']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $itemTables = $itemController->CreateItemTables('%');
}

//Output page data
$content = $itemController->CreateItemDropdownList(). $itemTables;

include 'template.php';
?>