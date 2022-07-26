<?php


if(isset($_GET["primary_school_year"]) &&  isset($_GET["primary_school_name"])){
    $name = $_GET["primary_school_name"];
    $year = $_GET["primary_school_year"];
   setcookie("primary_school_year",$year,05-12-3030,"/barangay/school");
   setcookie("primary_school_name",$name,05-12-3030,"/barangay/school");
   header("Location: /barangay/school/primary.php");
}


if(isset($_GET["secondary_school_year"]) &&  isset($_GET["secondary_school_name"])){
    $name = $_GET["secondary_school_name"];
    $year = $_GET["secondary_school_year"];
   setcookie("secondary_school_year",$year,05-12-3030,"/barangay/school");
   setcookie("secondary_school_name",$name,05-12-3030,"/barangay/school");
   header("Location: /barangay/school/secondary.php");
}



if(isset($_GET["tertiary_school_year"]) &&  isset($_GET["tertiary_school_name"]) &&  isset($_GET["tertiary_school_course"])){
    $name = $_GET["tertiary_school_name"];
    $year = $_GET["tertiary_school_year"];
    $course = $_GET["tertiary_school_course"];
   setcookie("tertiary_school_year",$year,05-12-3030,"/barangay/school");
   setcookie("tertiary_school_name",$name,05-12-3030,"/barangay/school");
<<<<<<< HEAD
   setcookie("tertiary_school_course",$course,05-12-3030,"/barangay/school");
=======
   setcookie("tertiary_school_course",$name,05-12-3030,"/barangay/school");
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
   header("Location: /barangay/school/tertiary.php");
}
?>