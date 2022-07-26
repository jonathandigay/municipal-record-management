<?php

require("../../database/connection.php");

$rowresult=null;

if(isset($_POST["tertiary_education"])){
    $school_year = $_POST["school_year"];
    $school_name = $_POST["school_name"];
    $school_course = $_POST["school_course"];
    $m1 = !empty($_POST["m1"])? $_POST["m1"]:0;
    $f1 = !empty($_POST["f1"])? $_POST["f1"]:0;
    $m2 = !empty($_POST["m2"])? $_POST["m2"]:0;
    $f2 = !empty($_POST["f2"])? $_POST["f2"]:0;
   


   $result= $dbconnection->query("SELECT * FROM tertiary_education");

   if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        $id = $row["id"];
          if(strcmp($school_year,$row["schoolYear"]) === 0 && strcmp($school_name,$row["schoolName"])===0 && strcmp($school_course,$row["schoolCourse"])===0){
            
            $dbconnection->query("UPDATE tertiary_education 
             SET schoolYear = '$school_year',
            schoolName = '$school_name',
            schoolCourse = '$school_course',
             m1 =$m1,
               f1 =$f1,
               m2 = $m2,
               f2 = $f2 WHERE id=$id");


       setcookie("popup_modal","saverecord",05-12-2030,"/barangay/school");
       header("Location: /barangay/school/tertiary.php");

            exit();


          }  
    }        
   }

    $dbconnection->query("INSERT INTO tertiary_education (schoolYear,schoolName,schoolCourse,m1,f1,m2,f2) VALUES ('$school_year','$school_name','$school_course',$m1,$f1,$m2,$f2)");

       setcookie("popup_modal","saverecord",05-12-2030,"/barangay/school");
       header("Location: /barangay/school/tertiary.php");

}

?>