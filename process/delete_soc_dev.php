<?php


if(isset($_GET["id"])){

    $id =$_GET["id"];

    $dbconnection->query("DELETE FROM social_development WHERE id=$id");
}

?>