<?php
include_once '../Layouts/LayoutMainView.php';

class LayoutController{

    function SelectView(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'dashboard':
                    include_once '../Controllers/dashboardController.php';
                    break;
                case 'inventory':
                    include_once '../Controllers/ProductController.php';
                    break;
                case 'reports':
                    include_once '../Controllers/reportsController.php';
                    break;
                case 'supplier':
                    include_once '../Controllers/supplierController.php';
                    break;
                case 'transaction':
                    include_once '../Controllers/transactionController.php';
                    break;
                default:
                    include_once '../Controllers/dashboardController.php';
            }
        }
    }
}
 $controls = new LayoutController();


?>