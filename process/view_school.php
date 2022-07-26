<?php


if(isset($_GET["primary_school_year"]) &&  isset($_GET["primary_school_name"]) ){

    $primary_school_name = $_GET["primary_school_name"];
    $primary_school_year = $_GET["primary_school_year"];
   setcookie("primary_school_year",$primary_school_year,05-12-2030,"/barangay/view");
   setcookie("primary_school_name",$primary_school_name,05-12-2030,"/barangay/view");
   header("Location: /barangay/view/primary_school.php");
}

<<<<<<< HEAD
if(isset($_GET["secondary_school_year"]) &&  isset($_GET["secondary_school_name"]) ){

    $secondary_school_name = $_GET["secondary_school_name"];
    $secondary_school_year = $_GET["secondary_school_year"];
   setcookie("secondary_school_year",$secondary_school_year,05-12-2030,"/barangay/view");
   setcookie("secondary_school_name",$secondary_school_name,05-12-2030,"/barangay/view");
   header("Location: /barangay/view/secondary_school.php");
}

if(isset($_GET["tertiary_school_year"]) &&  isset($_GET["tertiary_school_name"]) && isset($_GET["tertiary_school_course"]) ){


    
    $tertiary_school_name = $_GET["tertiary_school_name"];
    $tertiary_school_year = $_GET["tertiary_school_year"];
    $tertiary_school_course = $_GET["tertiary_school_course"];

   setcookie("tertiary_school_year",$tertiary_school_year,05-12-2030,"/barangay/view");
   setcookie("tertiary_school_name",$tertiary_school_name,05-12-2030,"/barangay/view");
   setcookie("tertiary_school_course",$tertiary_school_course,05-12-2030,"/barangay/view");
   header("Location: /barangay/view/tertiary_school.php");
}

=======
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
?>