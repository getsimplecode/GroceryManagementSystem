<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/productDatabase.php';
include_once '../Layouts/LayoutMainView.php';

class ProductController{ 

    function ReturnView(){
        $product = new ProductsDatabase();
        return include_once '../main/products/productView.php';
    }
}

// Declarations of Controllers //
$controls = new ProductController();
$controls->ReturnView();
?>