<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/reportsDatabase.php';
include_once '../Layouts/LayoutMainView.php';
class ReportsController{
    function ReturnView(){
        return include_once '../main/reports/reportsView.php';
    }
}

// Declarations of Controllers //
$controls = new ReportsController();
$controls->ReturnView();
?>