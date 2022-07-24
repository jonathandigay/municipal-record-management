<?php


if(isset($_GET["year"]) &&  isset($_GET["barangay"])){

    $barangay = $_GET["barangay"];
    $year = $_GET["year"];
   setcookie("year",$year,05-12-2030,"/barangay");
   setcookie("barangay",$barangay,05-12-2030,"/barangay");


   header("Location: /barangay/demography.php");
   
}

?>