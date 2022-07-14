<?php
session_start();

if(isset($_GET["logout"])){
$_SESSION["user"]=null;
    header('Location: http://localhost/barangay/auth/login.php');

exit();
}



?>