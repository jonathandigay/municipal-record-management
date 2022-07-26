<?php

require("../database/connection.php");
$primary_row = null;
$secondary_row = null;
<<<<<<< HEAD
$tertiary_row  = null;
=======
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3


$primaryresults = $dbconnection->query("SELECT * FROM primary_education");
$secondaryresults = $dbconnection->query("SELECT * FROM secondary_education");
$tertiaryresults = $dbconnection->query("SELECT * FROM tertiary_education");

if($primaryresults->num_rows > 0){

    $current_primary_school_year = "2021-2022";
    $current__primary_school_name = "Buyabod Elementary School";
     


// Primary school starts

if(!isset($_COOKIE["primary_school_year"]) && !isset($_COOKIE["primary_school_name"])){


    while($row=$primaryresults->fetch_assoc()){
           
    if( strcmp($current_primary_school_year,$row["schoolYear"]) === 0 &&  strcmp($current__primary_school_name, $row["schoolName"])=== 0 ){
        $primary_row = $row;
    }
    }
}

if(isset($_COOKIE["primary_school_year"]) && !isset($_COOKIE["primary_school_name"])){


    while($row=$primaryresults->fetch_assoc()){
           
    if( strcmp($_COOKIE["primary_school_year"],$row["schoolYear"]) === 0 &&  strcmp($current__primary_school_name, $row["schoolName"])=== 0 ){
        $primary_row = $row;
    }
    }
}

if(!isset($_COOKIE["primary_school_year"]) && isset($_COOKIE["primary_school_name"])){


    while($row=$primaryresults->fetch_assoc()){
           
    if( strcmp($current_primary_school_year,$row["schoolYear"]) === 0 &&  strcmp($_COOKIE["primary_school_name"], $row["schoolName"])=== 0 ){
        $primary_row = $row;
    }
    }
}
if(isset($_COOKIE["primary_school_year"]) && isset($_COOKIE["primary_school_name"])){

    while($row=$primaryresults->fetch_assoc()){
           
    if( strcmp($_COOKIE["primary_school_year"],$row["schoolYear"]) === 0 &&  strcmp($_COOKIE["primary_school_name"], $row["schoolName"])=== 0 ){
        $primary_row = $row;
    }
    }
}


// Secondary school starts

if($secondaryresults->num_rows > 0){



$current_secondary_school_year = "2021-2022";
$current__secondary_school_name = "Kilo-Kilo National High School";



if(!isset($_COOKIE["secondary_school_year"]) && !isset($_COOKIE["secondary_school_name"])){


while($row=$secondaryresults->fetch_assoc()){

if( strcmp($current_secondary_school_year,$row["schoolYear"]) === 0 && strcmp($current__secondary_school_name,
$row["schoolName"])=== 0 ){
$secondary_row = $row;
}
}
}

if(isset($_COOKIE["secondary_school_year"]) && !isset($_COOKIE["secondary_school_name"])){


while($row=$secondaryresults->fetch_assoc()){

if( strcmp($_COOKIE["secondary_school_year"],$row["schoolYear"]) === 0 && strcmp($current__secondary_school_name,
$row["schoolName"])=== 0 ){
$secondary_row = $row;
}
}
}

if(!isset($_COOKIE["secondary_school_year"]) && isset($_COOKIE["secondary_school_name"])){


while($row=$secondaryresults->fetch_assoc()){

if( strcmp($current_secondary_school_year,$row["schoolYear"]) === 0 && strcmp($_COOKIE["secondary_school_name"],
$row["schoolName"])=== 0 ){
$secondary_row = $row;
}
}
}
if(isset($_COOKIE["secondary_school_year"]) && isset($_COOKIE["secondary_school_name"])){

while($row=$secondaryresults->fetch_assoc()){

if( strcmp($_COOKIE["secondary_school_year"],$row["schoolYear"]) === 0 && strcmp($_COOKIE["secondary_school_name"],
$row["schoolName"])=== 0 ){
$secondary_row = $row;
}
}
}
}

// Secondary school ends







// Tertiary school starts



if($tertiaryresults->num_rows > 0){



$current_tertiary_school_year = "2021-2022";
<<<<<<< HEAD
$current_tertiary_school_name = "Santa Cruz Institute";
$current_tertiary_school_course = "BS Computer Science";
=======
$current__tertiary_school_name = "Santa Cruz Institute";
$current__tertiary_school_course = "BS Computer Science";
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3



if(!isset($_COOKIE["tertiary_school_year"]) && !isset($_COOKIE["tertiary_school_name"])  && !isset($_COOKIE["tertiary_school_course"])){


while($row=$tertiaryresults->fetch_assoc()){

<<<<<<< HEAD
if( strcmp($current_tertiary_school_year,$row["schoolYear"]) === 0 && strcmp($current_tertiary_school_name,
$row["schoolName"])=== 0 && strcmp($current_tertiary_school_course,
=======
if( strcmp($current_tertiary_school_year,$row["schoolYear"]) === 0 && strcmp($current__tertiary_school_name,
$row["schoolName"])=== 0 && strcmp($current__tertiary_school_course,
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
$row["schoolCourse"])=== 0 ){
$tertiary_row = $row;
}
}
}

if(isset($_COOKIE["tertiary_school_year"]) && !isset($_COOKIE["tertiary_school_name"]) && !isset($_COOKIE["tertiary_school_course"])  ){


while($row=$tertiaryresults->fetch_assoc()){

<<<<<<< HEAD
if( strcmp($_COOKIE["tertiary_school_year"],$row["schoolYear"]) === 0 && strcmp($current_tertiary_school_name,
$row["schoolName"])=== 0 && strcmp($current_tertiary_school_course,
=======
if( strcmp($_COOKIE["tertiary_school_year"],$row["schoolYear"]) === 0 && strcmp($current__tertiary_school_name,
$row["schoolName"])=== 0 && strcmp($current__tertiary_school_course,
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
$row["schoolCourse"])=== 0  ){
$tertiary_row = $row;
}
}
}

if(!isset($_COOKIE["tertiary_school_year"]) && isset($_COOKIE["tertiary_school_name"]) && !isset($_COOKIE["tertiary_school_course"])){

while($row=$tertiaryresults->fetch_assoc()){

if( strcmp($current_tertiary_school_year,$row["schoolYear"]) === 0 && strcmp($_COOKIE["tertiary_school_name"],
$row["schoolName"])=== 0 && strcmp($current_tertiary_school_course,$row["schoolCourse"]) === 0 ){
$tertiary_row = $row;
}
}
}

<<<<<<< HEAD


=======
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
if(!isset($_COOKIE["tertiary_school_year"]) && !isset($_COOKIE["tertiary_school_name"]) && isset($_COOKIE["tertiary_school_course"])){


while($row=$tertiaryresults->fetch_assoc()){

<<<<<<< HEAD
if( strcmp($current_tertiary_school_year,$row["schoolYear"]) === 0 && strcmp($current_tertiary_school_name,
=======
if( strcmp($current_tertiary_school_year,$row["schoolYear"]) === 0 && strcmp($current__tertiary_school_name,
>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
$row["schoolName"])=== 0 && strcmp($_COOKIE["tertiary_school_course"],$row["schoolCourse"]) === 0 ){
$tertiary_row = $row;
}
}
}

<<<<<<< HEAD


if(isset($_COOKIE["tertiary_school_year"]) && isset($_COOKIE["tertiary_school_name"]) && isset($_COOKIE["tertiary_school_course"])){
=======
if(isset($_COOKIE["tertiary_school_year"]) && isset($_COOKIE["tertiary_school_name"]) && isset($_COOKIE["tertiary_school_course"])){

>>>>>>> d7ecf03639143f887ac402ca2a8e96c474a599c3
while($row=$tertiaryresults->fetch_assoc()){

if( strcmp($_COOKIE["tertiary_school_year"],$row["schoolYear"]) === 0 && strcmp($_COOKIE["tertiary_school_name"],
$row["schoolName"])=== 0 && strcmp($_COOKIE["tertiary_school_course"],
$row["schoolCourse"])=== 0){
$tertiary_row = $row;
}
}
}
}

// Tertiary school ends


}?>