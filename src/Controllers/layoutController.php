<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/productDatabase.php';
$lay = new LayoutController();


class LayoutController{

   public $product;

   public function SelectView(){
    
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'dashboard':
                    include_once '../main/dashboard/dashboardView.php';
                    break;
                case 'product':
                    include_once '../Controllers/ProductController.php';
                    $products = new ProductController();
                    $products->ReturnView();
                    break;
                case 'reports':
                    include_once '../main/reports/reportsView.php';
                    break;
                case 'supplier':
                    include_once '../main/suppliers/supplierView.php';
                    break;
                case 'transaction':
                    include_once '../main/transaction/transactionView.php';
                    break;
                default:
                    // Default to the dashboard if no valid page is provided
                    include_once '../main/dashboard/dashboardView.php';
                    break;
            }
        }
    }
}

include_once '../Layouts/LayoutMainView.php';
?>
