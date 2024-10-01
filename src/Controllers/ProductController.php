<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/productDatabase.php';
$products = new ProductController();


class ProductController{ 

    public function ReturnView(){
        $product = new ProductsDatabase();
        return include_once '../main/products/productView.php';
    }

    public function UpdateViewProduct(){
        $product = new ProductsDatabase();
            if(isset($_GET['edit'])){
                    $id         = $_GET['edit'];
                    $products   = $product->Select($id);
                    $label      = $products['label'];
                    $price      = $products['price'];
                    $category   = $products['category'];
                    $brand      = $products['brand'];
               $unitmeasurement = $products['unitmeasurement'];
                $description    = $products['description'];

                include_once '../main/products/productUpdateView.php';
            } 

            if(isset($_GET['update'])){
                $id         = $_GET['update'];
                $label      = $_POST['label'];
                $price      = $_POST['price'];
                $category   = $_POST['category'];
                $brand      = $_POST['brand'];
           $unitmeasurement = $_POST['um'];
            $description    = $_POST['description'];
                
            $product->UpdateProduct(
                    id:$id,
                    label: $label,
                    price: $price,
                    category: $category,
                    brand: $brand,
                    unitmeasurement: $unitmeasurement,
                    description: $description
                );
                include_once '../main/products/productView.php';
            }
    }

    public function AddForm(){
        if(isset($_GET['add'])){
            include_once '../main/products/AddProductView.php';
        }
        if(isset($_POST['create'])){
                $plabel     = $_POST['label'];
                $pprice     = $_POST['price'];
                $pcategory  = $_POST['category'];
                $pbrand     = $_POST['brand'];
        $punitmeasurement   = $_POST['um'];
            $pdescription   = $_POST['description'];

            $product = new ProductsDatabase();
            $product->CreateProduct(
                label: $plabel,
                price: $pprice,
                category: $pcategory,
                brand: $pbrand,
                unitmeasurement: $punitmeasurement,
                description: $pdescription
            );
            include_once '../main/products/productView.php';
        } 
    }

    public function DeleteProduct(){
        $product = new ProductsDatabase();
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $product->Destroy($id);
            include_once '../main/products/productView.php';
        }

    }

    public function Pagination(){
        $product = new ProductsDatabase();
        if(isset($_GET['next'])){
           $next = $_GET['next'];
           $product->minimum = $next * $product->maximum;
           include_once '../main/products/productView.php';
        }
    }
    
}


include_once '../Controllers/layoutController.php';
?>