<?php  

require("./middleware/checklogin.php");
require("database/connection.php");




?>
<?php  require("./process/retrieve_soc_developement.php"); ?>
<?php  require("./process/soc_development_sector.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./layout/main.css">
    <link rel="icon" href="./assets/images/santacruz.png">
    <title>Education</title>
</head>



<body>

    <style>
    * {
        padding: 0;
        margin: 0;
    }

    .header {
        background: white;
        z-index: 1000;
    }

    table {
        /* border: 1px solid black; */
    }



    table tr th {
        padding: 7px 15px;
        border-left: 1px solid black;
        border-top: 1px solid black;
        background: black;
        color: white;
    }

    table tr td {
        padding: 5px 10px;
    }

    table tr td input {
        outline: none;
        padding: 5px 10px;
    }

    table tr td button {
        width: 100%;
        height: 100%;
        background: black;
        color: white;
        padding: 5px 10px;
    }

    .print button {
        color: white;
        background: black;

    }

    .accordion-item {
        border: none;
        background: rgb(165, 165, 165);
    }

    .print button:hover {
        opacity: .8;

    }

    .print button svg {
        fill: white;
    }

    .accordion-item button {
        border: none;
    }

    .accordion-item button:focus {
        border: none;
        opacity: .8;
    }

    .accordion-item button h6 {
        color: black;
        letter-spacing: .5px;
    }

    .form-select:focus {
        box-shadow: 0 0 2px 0 black;
        border: none !important
    }

    .accordion button::after {
        fill: white;
        display: none;
    }
    </style>

    <?php

$show_edit_population_by_age_input = false;

if(isset($_GET["edit_population_by_age"])){
    
}
if(isset($_POST["create_population_by_age"])){

    $ages= $_POST["ages"];
    $male= $_POST["male"];
    $female= $_POST["female"];


    $success =null;


    $sql = "INSERT INTO soc_dev_demography_age_sex (ages, male, female)
VALUES ( $ages,  $male,  $male')";

    if($dbconnection->query(  $sql)){
 $success="added";
 exit();
    }else{

    }



    
}



?>

    <div class="container-fluid">
        <?php

?>
        <div class="row">


            <?php

if(isset($_COOKIE["popup_modal"])){
    if($_COOKIE["popup_modal"]==="saverecord")
require("./modal/success.php");

}


?>


            <?php
require("./layoutsidebar/sidebar.php");

?>

            <div class="powered">
                <img src="./assets/images/gad.png" alt="">
            </div>
            <div class="burger_menu p-2 shadow" style="border-radius:50px;">
                <button class="navbar-toggler p-0 collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                        width="50px" fill="#fff" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m13 16.745c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm9-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm-4-5c0-.414-.336-.75-.75-.75h-14.5c-.414 0-.75.336-.75.75s.336.75.75.75h14.5c.414 0 .75-.336.75-.75z"
                            fill-rule="nonzero" />
                    </svg>
                </button>

            </div>

            <form action="health.php" method="POST" class="container-fluid p-0 w-100  px-3 col ">


                <div>
                    <div class="header position-sticky top-0 shadow">
                        <div class="title text-center  py-2" style="background:black;color:white;">
                            <h5 class="m-0 py-3 page_title"> Social Development Sector / Health</h5>
                        </div>
                        <?php require("./layout/soc_dev_header.php"); ?>


                    </div>


                    <div class="row mt-3 " id="parent_accordion">
                        <div class="accordion mb-3" id="demography">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionone" aria-expanded="false"
                                        aria-controls="accordionone">
                                        <h6 class="p-0"> Number of cases of teenage pregnancy </h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionone" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">


                                    <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" name="num2" id=""
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["num2"] : 0;  ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>




                        </div>
                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordiontwo" aria-expanded="false"
                                        aria-controls="accordiontwo">
                                        <h6 class="p-0"> Percentage of household with access to family planning services
                                        </h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordiontwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">


                                    <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">


                                        <tr>

                                            <td class="text-center"><input type="text"
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["num3"] : 0;  ?>"
                                                    name="num3" id="" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>




                        </div>
                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionthree" aria-expanded="false"
                                        aria-controls="accordionthree">
                                        <h6 class="p-0">Percentage of population covered by Philhealth and other health
                                            financing schemes (PDP-2011-2016)</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionthree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" name="num4"
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["num4"] : 0;  ?>"
                                                    id="" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>




                        </div>
                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionfour" aria-expanded="false"
                                        aria-controls="accordionfour">
                                        <h6 class="p-0">Percentage of households with source/access to safe drinking
                                            water (PDP 2011-2016)</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionfour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" name="num5" id=""
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["num5"] : 0;  ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>




                        </div>
                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionfive" aria-expanded="false"
                                        aria-controls="accordionfive">
                                        <h6 class="p-0">Percentage of households of household without sanitary
                                            toilets,latest</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionfive" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" name="num6" id=""
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["num6"] : 0;  ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>




                        </div>
                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionsix" aria-expanded="false"
                                        aria-controls="accordionsix">
                                        <h6 class="p-0">Presence of Barangay health center</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionsix" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <div class="d-flex justify-content-center py-3 align-items-center w-100">
                                        <div>
                                            <select class="form-select w-auto" aria-label="Default select example "
                                                name="bol1">
                                                <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol1"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol1"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                <option value="false">false</option>
                                                <option value="true">true</option>

                                            </select>
                                        </div>

                                    </div>


                                </div>
                            </div>




                        </div>
                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionfive" aria-expanded="false"
                                        aria-controls="accordionfive">
                                        <h6 class="p-0 ">Presence of garbage disposal system</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionfive" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <div class="d-flex justify-content-center py-3 align-items-center w-100">
                                        <div>
                                            <select class="form-select w-auto" aria-label="Default select example"
                                                name="bol2">
                                                <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol2"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol2"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                <option value="false">false</option>
                                                <option value="true">true</option>

                                            </select>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="accordion" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#paccordionseven"
                                        aria-expanded="false" aria-controls="paccordionseven">
                                        <h6 class="p-0"> Percentage of Popuation 6-24 years old by level currently
                                            attending by Age, Group and by Sex</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>

                                <div id="paccordionseven" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#demography">



                                    <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">

                                        <tr>

                                            <th>Availability of the following services for women</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>Councilling services for women </td>
                                            <td><select class="form-select w-auto" aria-label="Default select example"
                                                    name="bol3">
                                                    <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol3"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol3"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                    <option value="false">false</option>
                                                    <option value="true">true</option>

                                                </select></td>

                                        </tr>
                                        <tr>
                                            <td>Pap smear</td>
                                            <td><select class="form-select w-auto" aria-label="Default select example"
                                                    name="bol4">
                                                    <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol4"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol4"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                    <option value="false">false</option>
                                                    <option value="true">true</option>

                                                </select></td>

                                        </tr>
                                        <tr>
                                            <td>Breast cancer exam (including mammogram)</td>
                                            <td><select class="form-select w-auto" aria-label="Default select example"
                                                    name="bol5">
                                                    <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol5"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol5"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                    <option value="false">false</option>
                                                    <option value="true">true</option>
                                                </select></td>

                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionsix" aria-expanded="false"
                                        aria-controls="accordionsix">
                                        <h6 class="p-0 ">Availabiliy of public comfort rooms</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordionsix" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <div class="d-flex justify-content-center py-3 align-items-center w-100">
                                        <div>
                                            <select class="form-select w-auto" aria-label="Default select example"
                                                name="bol6">
                                                <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol6"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol6"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                <option value="false">false</option>
                                                <option value="true">true</option>

                                            </select>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="accordion  mb-3" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordiontwelve"
                                        aria-expanded="false" aria-controls="accordiontwelve">
                                        <h6 class="p-0">Presence of well-maintained health center with private rooms for
                                            physical exam/counselling</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="accordiontwelve" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                    <div class="d-flex justify-content-center py-3 align-items-center w-100">
                                        <div>
                                            <select class="form-select w-auto" aria-label="Default select example"
                                                name="bol7">
                                                <option selected hidden value=" <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol7"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> "> <?php
                                                    if(isset($rowresult)){
                                                        if($rowresult["bol7"]==0){
                                                        echo "false";
                                                        }else{ echo "true";}
                                                    }
                                                    ?> </option>
                                                <option value="false">false</option>
                                                <option value="true">true</option>

                                            </select>
                                        </div>

                                    </div>


                                </div>
                            </div>




                        </div>





                    </div>
                    <div class="accordion mb-3" id="demography">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordionone" aria-expanded="false"
                                    aria-controls="accordionone">
                                    <h6 class="p-0"> Number of women who reported equalfull access of women to
                                        comprehensive , quality and affordable health services (including and
                                        treatment of diseases; sexual reproductive health services ) , latest </h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordionone" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#parent_accordion">


                                <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">
                                    <tr>
                                        <td class="text-center"><input type="text" value="0" name="num7" id="" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>




                    </div>
                    <div class="accordion  mb-3" id="parent_accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordionten" aria-expanded="false"
                                    aria-controls="accordionten">
                                    <h6 class="p-0">Percentage of Population that accessed secondary and tertiary
                                        health services by sex</h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordionten" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#parent_accordion">
                                <div class="d-flex justify-content-center py-3 align-items-center w-100">
                                    <table class="w-25 m-auto mb-3 my-2  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" value="0" name="num8" id="" />
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                        </div>




                    </div>
                    <div class="accordion  mb-3" id="parent_accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordioneleven" aria-expanded="false"
                                    aria-controls="accordioneleven">
                                    <h6 class="p-0">Number of women who accessed quality material, and post-patrum
                                        care and services from health facilities and qualified health personnel</h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordioneleven" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                <div class="d-flex justify-content-center py-3 align-items-center w-100">
                                    <table class="w-25 m-auto mb-3 my-2  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" value="0" name="num9" id="" />
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                        </div>




                    </div>

                    <div class="accordion  mb-3" id="parent_accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordionthirtine" aria-expanded="false"
                                    aria-controls="accordionthirtine">
                                    <h6 class="p-0">Percentage of women who reported to have equal decision on the
                                        number of children of years between pregnancies over number of women
                                        interviewed, latest</h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordionthirtine" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                <div class="d-flex justify-content-center  align-items-center w-100">
                                    <table class="w-25 m-auto mb-3 my-2  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" value="0" name="num10" id="" />
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                        </div>




                    </div>
                    <div class="accordion  mb-3" id="parent_accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordiontfourthin" aria-expanded="false"
                                    aria-controls="accordiontfourthin">
                                    <h6 class="p-0">Number of adolescents who reported attendance to orientation of
                                        the prevention to early pregnancies and STDS, lates</h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordiontfourthin" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                <div class="d-flex justify-content-center  align-items-center w-100">
                                    <table class="w-25 m-auto mb-3 my-2  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" value="0" name="num11" id="" />
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                        </div>




                    </div>
                    <div class="accordion  mb-3" id="parent_accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordiontfourthin" aria-expanded="false"
                                    aria-controls="accordiontfourthin">
                                    <h6 class="p-0">Proportion of households who are informal settlers by sex (
                                        <span style=";color:red;">please use percentage ,
                                            ex:50%</span> )
                                    </h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordiontfourthin" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                <div class="d-flex justify-content-center  align-items-center w-100">
                                    <table class="w-25 m-auto mb-3 my-2  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" value="0" name="num12" id="" />
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                        </div>




                    </div>
                    <div class="accordion  mb-3" id="parent_accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordiontfourthin" aria-expanded="false"
                                    aria-controls="accordiontfourthin">
                                    <h6 class="p-0">Proportion of household with dwelling structures unable to
                                        protect them from the elenents (
                                        <span style=";color:red;">please use percentage ,
                                            ex:50%</span> )
                                    </h6>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg></span>
                                </button>

                            </h2>
                            <div id="accordiontfourthin" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#parent_accordion">
                                <div class="d-flex justify-content-center  align-items-center w-100">
                                    <table class="w-25 m-auto mb-3 my-2  p-4 " id="printcontent">
                                        <tr>
                                            <td class="text-center"><input type="text" value="0" name="num13" id="" />
                                            </td>
                                        </tr>
                                    </table>

                                </div>


                            </div>
                        </div>




                    </div>
                </div>
                <?php  require("./layout/soc_dev_footer.php");  ?>





            </form>


        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script src="./script/script.js"></script>




</body>

</html>