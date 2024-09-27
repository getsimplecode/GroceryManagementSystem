<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/productDatabase.php';
include_once '../Layouts/LayoutMainView.php';

class ProductController{ 

    function ReturnView(){
        if(isset($_GET['edit'])){
            return include_once '../main/products/productUpdateView.php';   
        }else
            $product = new ProductsDatabase();
            return include_once '../main/products/productView.php';

    }

    public function Update(){
        $product = new ProductsDatabase();
        if(isset($_GET['edit'])){
           $id = $_GET['edit'];
           $products = $product->Select($id);

           $label = $products['label'];
           $price = $products['price'];
           $category = $products['category'];
           $brand = $products['brand'];
           $unitmeasurement = $products['unitmeasurement'];
           $description = $products['description'];

          }

    }
}


?>