<?php
session_start();

session_destroy();
header('Location: ../Logins/LoginForm.php');
exit();
?>