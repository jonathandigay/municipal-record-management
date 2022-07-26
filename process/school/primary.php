<?php

require("../../database/connection.php");

$rowresult=null;

if(isset($_POST["primary_education"])){


    $school_year = $_POST["school_year"];
    $school_name = $_POST["school_name"];
    $m1 = !empty($_POST["m1"])? $_POST["m1"]:0;
    $f1 = !empty($_POST["f1"])? $_POST["f1"]:0;
    $m2 = !empty($_POST["m2"])? $_POST["m2"]:0;
    $f2 = !empty($_POST["f2"])? $_POST["f2"]:0;
    $m3 = !empty($_POST["m3"])? $_POST["m3"]:0;
    $f3 = !empty($_POST["f3"])? $_POST["f3"]:0;
    $num1 = !empty($_POST["num1"])? $_POST["num1"]:0;


   $result= $dbconnection->query("SELECT * FROM primary_education");

   if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        $id = $row["id"];

           
          if(strcmp($school_year,$row["schoolYear"]) === 0 && strcmp($school_name,$row["schoolName"])===0 ){

            
            $dbconnection->query("UPDATE primary_education 
             SET schoolYear = '$school_year',
            schoolName = '$school_name',
             m1 =$m1,
               f1 =$f1,
               m2 = $m2,
               f2 = $f2,
               m3 = $m3,
               f3 = $f3 WHERE id=$id;");


       setcookie("popup_modal","saverecord",05-12-2030,"/barangay/school");
       header("Location: /barangay/school/primary.php");

            exit();


          }  
    }
    
            
   }




    $dbconnection->query("INSERT INTO primary_education (schoolYear,schoolName,m1,f1,m2,f2,m3,f3,num1) VALUES ('$school_year','$school_name',$m1,$f1,$m2,$f2,$m3,$f3,$num1)");

       setcookie("popup_modal","saverecord",05-12-2030,"/barangay/school");
       header("Location: /barangay/school/primary.php");

}

?>