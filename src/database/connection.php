<?php
class Connection{
    protected $pdo;
    public function __construct(){
        $host = 'localhost:3307';
        $dbname = 'jenniestoredb';
        $username = 'root';
        $password = '';
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>