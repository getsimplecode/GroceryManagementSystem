<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/productDatabase.php';


class LayoutController{

   public $product;
   public function SelectView(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'dashboard':
                    include_once '../main/dashboard/dashboardView.php';
                    break;
                case 'inventory':
                    include_once '../Controllers/ProductController.php';
                    $productControls = new ProductController();
                    $productControls->ReturnView();
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
            }
        }
    }


}
include_once '../Layouts/LayoutMainView.php';

?>