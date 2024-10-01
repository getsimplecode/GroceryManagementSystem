<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/GroceryManagementSystem/src/database/usersDatabase.php';
session_start();

$userdb = new UsersDatabase();

if(isset($_POST['login'])){
    $_SESSION['test'] = 'PAUL JOHN MEJORADA';
    header('Location: ../Controllers/layoutController.php');
}

if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userdb->CreateUser($fullname,$email,$username,$password);

    header('Location: LoginForm.php');
}


?>