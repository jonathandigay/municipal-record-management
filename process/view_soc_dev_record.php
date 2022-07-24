<?php


if(isset($_GET["year"]) &&  isset($_GET["barangay"])){

    $barangay = $_GET["barangay"];
    $year = $_GET["year"];
   setcookie("year",$year,05-12-2030,"/barangay/view");
   setcookie("barangay",$barangay,05-12-2030,"/barangay/view");
   header("Location: /barangay/view/soc_dev.php");

}

?>