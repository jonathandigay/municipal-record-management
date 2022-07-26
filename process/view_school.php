<?php


if(isset($_GET["primary_school_year"]) &&  isset($_GET["primary_school_name"]) ){

    $primary_school_name = $_GET["primary_school_name"];
    $primary_school_year = $_GET["primary_school_year"];
   setcookie("primary_school_year",$primary_school_year,05-12-2030,"/barangay/view");
   setcookie("primary_school_name",$primary_school_name,05-12-2030,"/barangay/view");
   header("Location: /barangay/view/primary_school.php");
}

?>