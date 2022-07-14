<?php
session_start();



class sessions {

public $barangay;

    function brgy_sess($barangay){
        $_SESSION["barangay"]=$barangay;
    }
}



?>