<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/supplierDatabase.php';
include_once '../Layouts/LayoutMainView.php';
class SupplierController{
    function ReturnView(){
        return include_once '../main/suppliers/supplierView.php';
    }
}

// Declarations of Controllers //
$controls = new SupplierController();
$controls->ReturnView();
?>