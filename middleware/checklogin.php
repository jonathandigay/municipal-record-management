<?php

session_start();

$login = $_SESSION["user"];


if(!$login){
    header('Location: http://localhost/barangay/auth/login.php');
}

?>