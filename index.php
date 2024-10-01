<?php 
session_start();
header('Location: src/Logins/LoginForm.php');

if(isset($_SESSION['test'])){
    header('Location: src/Controllers/layoutController.php');
    exit();
}
?>