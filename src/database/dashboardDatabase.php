<?php
include_once 'connection.php';

class DashboardDatabase extends Connection{
    
    public function ViewTable(){
        return include_once '../main/dashboard/dashboardView.php';
    }
    public function Create(){
        
    }
    public function Update(){
        
    }
    public function Destroy(){
        
    }
}

?>