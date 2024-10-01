<?php
include_once '../database/connection.php';
class UsersDatabase extends Connection{

    public function CreateUser($fullname,$email,$username,$password){
        $query = "Insert into Users (username,password,email,fullname)VALUES(:username,:password,:email,:fullname)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'fullname' => $fullname,
                'email' => $email,
                'username' => $username,
                'password' => $password
            ]
            );
    }

    public function ValidateUsers($username,$password){
        $query = "";
    }

}

?>