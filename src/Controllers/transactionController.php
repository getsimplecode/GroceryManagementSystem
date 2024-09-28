<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/transactionDatabase.php';

class TransactionController{
    function ReturnView(){
        return include_once '../main/transaction/transactionView.php';
    }
}

include_once '../Controllers/layoutController.php';
?>