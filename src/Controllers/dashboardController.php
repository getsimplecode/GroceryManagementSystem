<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/dashboardDatabase.php';

class DashboardControllers{
    function ReturnView(){
        return include_once '../main/dashboard/dashboardView.php';
    }
}

include_once '../Controllers/layoutController.php';
?>