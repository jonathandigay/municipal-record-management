<?php

session_start();

$login = $_SESSION["user"];


if(!$login){
    header('Location: /barangay/auth/login.php');
}

?>