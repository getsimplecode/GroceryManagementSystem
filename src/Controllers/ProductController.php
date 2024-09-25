<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/inventoryDatabase.php';
include_once '../Layouts/LayoutMainView.php';
class ProductController{ 
    function ReturnView(){
        return include_once '../main/products/productView.php';
    }
}

// Declarations of Controllers //
$controls = new ProductController();
$controls->ReturnView();
?>