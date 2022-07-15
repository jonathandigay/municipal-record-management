<?php

if(isset($_GET["current_user"])){
if($_GET["current_user"]=="barangay"){
        header("Location: http://localhost/barangay/demography.php");
    }
    if($_GET["current_user"]=="school"){
        
        header("Location: http://localhost/barangay/primaryschool.php");
    }
    if($_GET["current_user"]== "department"){
        
        header("Location: http://localhost/barangay/department.php");
    }
}
 

?>