<?php


if(isset($_GET["id"])){

    $id =$_GET["id"];

    $dbconnection->query("DELETE FROM social_development WHERE id=$id");
       setcookie("popup_modal","deleterecord",05-12-2030,"/barangay/records");

       header("Location: /barangay/records/social_development_sector.php");
    
}

?>