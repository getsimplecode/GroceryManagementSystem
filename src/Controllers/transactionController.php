<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/transactionDatabase.php';
include_once '../Layouts/LayoutMainView.php';
class TransactionController{
    function ReturnView(){
        return include_once '../main/transaction/transactionView.php';
    }
}

// Declarations of Controllers //
$controls = new TransactionController();
$controls->ReturnView();
?>