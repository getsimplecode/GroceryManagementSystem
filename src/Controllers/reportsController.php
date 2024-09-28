<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/reportsDatabase.php';

class ReportsController{
    function ReturnView(){
        return include_once '../main/reports/reportsView.php';
    }
}


include_once '../Controllers/layoutController.php';
?>