<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/dashboardDatabase.php';
include_once '../Layouts/LayoutMainView.php';
class DashboardControllers{
    function ReturnView(){
        return include_once '../main/dashboard/dashboardView.php';
    }
}

// Declarations of Controllers //
$controls = new DashboardControllers();
$controls->ReturnView();
?>