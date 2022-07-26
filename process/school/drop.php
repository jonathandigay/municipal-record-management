<?php



if(isset($_GET["primary_drop_id"])){

    $id = $_GET['primary_drop_id'];
    echo $id;


    $dbconnection->query("DELETE FROM primary_education WHERE id=$id");
       setcookie("popup_modal","deleterecord",05-12-2030,"/barangay/school");

    header("Location: /barangay/school/primary.php");

}

if(isset($_GET["secondary_drop_id"])){

    $id = $_GET['secondary_drop_id'];
    echo $id;


    $dbconnection->query("DELETE FROM secondary_education WHERE id=$id");
       setcookie("popup_modal","deleterecord",05-12-2030,"/barangay/school");

    header("Location: /barangay/school/secondary.php");

}



if(isset($_GET["tertiary_drop_id"])){

    $id = $_GET['tertiary_drop_id'];
    echo $id;


    $dbconnection->query("DELETE FROM tertiary_education WHERE id=$id");
       setcookie("popup_modal","deleterecord",05-12-2030,"/barangay/school");

    header("Location: /barangay/school/tertiary.php");

}



?>