<?php

$rowresult=null;

$test = null;


$results = $dbconnection->query("SELECT * FROM social_development");

if(!isset($_COOKIE["year"]) && !isset($_COOKIE["barangay"])){
    

   if($results->num_rows > 0){
    
    $currentbarangay = "Alobo";
    $currentyear = "2021-2022";
    while($dbrow =$results->fetch_assoc() ){

        if($dbrow["barangay"] === $currentbarangay && strcmp($dbrow["year"], $currentyear )===0   ){
         $rowresult=$dbrow;
         
         $test="not setted";
        }}}
    }


if(isset($_COOKIE["year"]) && !isset($_COOKIE["barangay"])){
    if($results->num_rows > 0){
    
    $currentbarangay = "Alobo";
    while($dbrow =$results->fetch_assoc() ){

        if($dbrow["barangay"] === $currentbarangay && strcmp($dbrow["year"], $_COOKIE["year"]) ===0   ){
         $rowresult=$dbrow;
         $test="set year";

        }}}
}



if(isset($_COOKIE["barangay"]) && !isset($_COOKIE["year"])){
  if($results->num_rows > 0){
    
   $currentyear = "2021-2022";
    while($dbrow =$results->fetch_assoc() ){
        if($dbrow["barangay"] === $_COOKIE["barangay"] && strcmp($dbrow["year"], $currentyear )===0  ){
         $rowresult=$dbrow;
         $test="set barangay";

        }}}
}




if(isset($_COOKIE["barangay"]) && isset($_COOKIE["year"]  )){
  if($results->num_rows > 0){
   
    while($dbrow =$results->fetch_assoc() ){
      
    
        if($dbrow["barangay"] === $_COOKIE["barangay"] && strcmp($dbrow["year"], $_COOKIE["year"])===0 ){
        $rowresult =$dbrow;
        }}}
}



?>