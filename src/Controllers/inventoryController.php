<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/inventoryDatabase.php';
include_once '../Layouts/LayoutMainView.php';
class InventoryController{ 
    function ReturnView(){
        return include_once '../main/inventory/inventoryView.php';
    }
}

// Declarations of Controllers //
$controls = new InventoryController();
$controls->ReturnView();
?>