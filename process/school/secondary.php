<?php

require("../../database/connection.php");

$rowresult=null;

if(isset($_POST["secondary_education"])){


    $school_year = $_POST["school_year"];
    $school_name = $_POST["school_name"];
    $m1 = !empty($_POST["m1"])? $_POST["m1"]:0;
    $f1 = !empty($_POST["f1"])? $_POST["f1"]:0;
    $m2 = !empty($_POST["m2"])? $_POST["m2"]:0;
    $f2 = !empty($_POST["f2"])? $_POST["f2"]:0;
<<<<<<< HEAD
    $num1 = !empty($_POST["num1"])? $_POST["num1"]:0;
    $m3 = !empty($_POST["m3"])? $_POST["m3"]:0;
    $f3 = !empty($_POST["f3"])? $_POST["f3"]:0;
    $num2 = !empty($_POST["num2"])? $_POST["num2"]:0;
    $m4 = !empty($_POST["m4"])? $_POST["m4"]:0;
    $f4 = !empty($_POST["f4"])? $_POST["f4"]:0;

=======
    $m3 = !empty($_POST["m3"])? $_POST["m3"]:0;
    $f3 = !empty($_POST["f3"])? $_POST["f3"]:0;
    $num1 = !empty($_POST["num1"])? $_POST["num1"]:0;
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3


   $result= $dbconnection->query("SELECT * FROM secondary_education");

   if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        $id = $row["id"];
          if(strcmp($school_year,$row["schoolYear"]) === 0 && strcmp($school_name,$row["schoolName"])===0 ){
            $dbconnection->query("UPDATE secondary_education 
             SET schoolYear = '$school_year',
            schoolName = '$school_name',
<<<<<<< HEAD
            m1 =$m1,
               f1 =$f1,
               m2 = $m2,
               f2 = $f2,
               num1 = $num1,
               m3 = $m3,
               f3 = $f3,
               num2 = $num2,
               m4 = $m4,
               f4 = $f4 WHERE id=$id");
=======
             m1 =$m1,
               f1 =$f1,
               m2 = $m2,
               f2 = $f2,
               m3 = $m3,
               f3 = $f3 WHERE id=$id");
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3


       setcookie("popup_modal","saverecord",05-12-2030,"/barangay/school");
       header("Location: /barangay/school/secondary.php");

            exit();
<<<<<<< HEAD
          }  
    }        
   }

    $dbconnection->query("INSERT INTO secondary_education (schoolYear,schoolName,m1,f1,m2,f2,num1,m3,f3,num2,m4,f4) VALUES ('$school_year','$school_name',$m1,$f1,$m2,$f2,$num1,$m3,$f3,$num2,$m4,$f4)");
=======


          }  
    }
    
            
   }




    $dbconnection->query("INSERT INTO secondary_education (schoolYear,schoolName,m1,f1,m2,f2,m3,f3,num1) VALUES ('$school_year','$school_name',$m1,$f1,$m2,$f2,$m3,$f3,$num1)");
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3

       setcookie("popup_modal","saverecord",05-12-2030,"/barangay/school");
       header("Location: /barangay/school/secondary.php");

}

?>