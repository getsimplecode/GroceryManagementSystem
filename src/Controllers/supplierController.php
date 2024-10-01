<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/supplierDatabase.php';

class SupplierController{
    function ReturnView(){
        return include_once '../main/suppliers/supplierView.php';
    }
}

include_once '../Controllers/layoutController.php';
?>