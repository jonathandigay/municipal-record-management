<?php  
require("./middleware/checklogin.php");
require("./database/connection.php");
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
    <title>Demography</title>
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
        border: 1px solid black;

        background: black;
        color: white;
    }

    table tr td {
        padding: 5px 10px;
        border: 1px solid black;
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
        background: rgb(165, 165, 165);
        border: none;

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



    .santa_cruz_gad .show {
        display: flex
    }

    .santa_cruz_gad .img {
        max-width: 700px;
    }

    .burger_menu {
        position: fixed;
        width: max-content;
        top: 20px;
        left: 20px;
        background: black;
        cursor: pointer;
        z-index: 5000;
    }

    .burger_menu :hover {
        opacity: .8
    }
    </style>



    <div class="container-fluid">
        <?php
?>

        <?php

if(isset($_COOKIE["popup_modal"])){
    if($_COOKIE["popup_modal"]==="saverecord")
require("./modal/success.php");

}


?>




        <!-- <?php
require("./loader/loader.php");
?> -->


        <div class="row">
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


            <form action="demography.php" method="POST" class="container-fluid p-0 w-100  px-3 col "
                style="background:white">
                <div name="http:localhost/barangay/demography.php">
                    <div class="header position-sticky top-0 shadow">
                        <div class="title text-center  py-2 px-5 " style="background:black;color:white;">
                            <h5 class="m-0 py-3 page_title">Social Development Sector / Demography
                            </h5>
                        </div>

                        <?php require("./layout/soc_dev_header.php"); ?>
                    </div>





                    <div class="row mt-3">
                        <div class="accordion mb-3" id="demography">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#totalhouseholdbyageandsex"
                                        aria-expanded="false" aria-controls="totalhouseholdbyageandsex">
                                        <h6 class="p-0"> Total Household Polpulation by Age and sex (psa.gov.ph)</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="totalhouseholdbyageandsex" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#demography">



                                    <div id="printcontent">
                                        <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">

                                            <tr>

                                                <th>Ages</th>
                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>
                                                <td>1-4</td>
                                                <td><input type="text" name="m1" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m1"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f1" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f1"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5-9 </td>
                                                <td><input type="text" name="m2" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m2"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f2" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f2"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 - 14</td>
                                                <td><input type="text" name="m3" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m3"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f3" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f3"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15 - 19 </td>
                                                <td><input type="text" name="m4" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m4"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f4" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f4"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20 - 24</td>
                                                <td><input type="text" name="m5" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m5"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f5" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f5"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25 - 29</td>
                                                <td><input type="text" name="m6" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m6"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f6" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f6"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30 - 34</td>
                                                <td><input type="text" name="m7" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m7"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f7" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f7"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35 - 39</td>
                                                <td><input type="text" name="m8" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m8"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f8" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f8"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40 - 44</td>
                                                <td><input type="text" name="m9" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m9"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f9" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f9"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>45 - 49</td>
                                                <td><input type="text" name="m10" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m10"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f10" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f10"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50 - 54</td>
                                                <td><input type="text" name="m11" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m11"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f11" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f11"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>55 - 59</td>
                                                <td><input type="text" name="m12" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m12"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f12" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f12"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>60 - 64</td>
                                                <td><input type="text" name="m13" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m13"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f13" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f13"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>65 - 69</td>
                                                <td><input type="text" name="m14" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m14"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f14" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f14"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>70 - 74</td>
                                                <td><input type="text" name="m15" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m15"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f15" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f15"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>75 - 79</td>
                                                <td><input type="text" name="m16" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m16"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f16" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f16"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>80 - 84</td>
                                                <td><input type="text" name="m17" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m17"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f17" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f17"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>85 - 89</td>
                                                <td><input type="text" name="m18" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m18"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f18" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f18"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>90 - 95</td>
                                                <td><input type="text" name="m19" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m19"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f19" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f19"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>96-100</td>
                                                <td><input type="text" name="m20" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m20"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f20" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f20"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>101 and over</td>
                                                <td><input type="text" name="m21" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m21"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f21" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f21"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                        </table>
                                        <br>

                                        <br>
                                    </div>



                                </div>


                            </div>
                            </br>
                            <!--  -->
                            <div class="accordion" id="demography">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button d-flex justify-content-between shadow"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#sexindex"
                                            aria-expanded="false" aria-controls="sexindex">
                                            <h6 class="p-0"> Sex ratio</h6>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                                </svg></span>
                                        </button>

                                    </h2>
                                    <div id="sexindex" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                        data-bs-parent="#demography">


                                        <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                            <tr>

                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>

                                                <td> <input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m22" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m22"] : 0;  ?>" />
                                                </td>
                                                <td> <input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f22" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f22"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                        </table>
                                        <br>

                                    </div>
                                </div>

                            </div>
                            <br />
                            <!--  -->
                            <div class="accordion" id="demography">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button d-flex justify-content-between shadow"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#totalpopulationbymartialstatus" aria-expanded="false"
                                            aria-controls="totalpopulationbymartialstatus">
                                            <h6 class="p-0"> Total population by Martial status , Sex Dissaggregate
                                                (www.nscb.gov.ph)</h6>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                                </svg></span>
                                        </button>

                                    </h2>

                                    <div id="totalpopulationbymartialstatus" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#demography">



                                        <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">

                                            <tr>

                                                <th>Status</th>
                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>
                                                <td>Single</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m23" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m23"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f23" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f23"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maried - Active</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m24" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m24"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f24" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f24"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Married - Separated</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m25" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m25"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f25" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f25"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Divorced</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m26" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m26"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f26" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f26"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Live-in Arrangement - Active</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m27" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m27"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f27" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f27"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Live-n Arrangement - Sepearated</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m28" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m28"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f28" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f28"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Widowed</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m29" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m29"] : 0;  ?>" />
                                                </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f29" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f29"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                        </table>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <br />
                            <!--  -->
                            <div class="accordion" id="demography">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button d-flex justify-content-between shadow"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#averagehouseholdsize" aria-expanded="false"
                                            aria-controls="averagehouseholdsize">
                                            <h6 class="p-0"> Average household Size </h6>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                                </svg></span>
                                        </button>

                                    </h2>
                                    <div id="averagehouseholdsize" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#demography">


                                        <table class="w-25 m-auto mb-3 my-3  p-4 " id="printcontent">

                                            <tr>
                                                <th class="text-center">Total</th>

                                            </tr>
                                            <tr>

                                                <td class="text-center"><input onkeypress="return onlyNumberKey(event)"
                                                        type="text" name="num1" id=""
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["num1"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                        </table>
                                        <br>

                                    </div>
                                </div>




                            </div>
                            <br />

                            <!--  -->
                            <div class="accordion" id="demography">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button d-flex justify-content-between shadow"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#percentage_of_male_female_household" aria-expanded="false"
                                            aria-controls="percentage_of_male_female_household">
                                            <h6 class="p-0"> Percentage of Male/Female Household by Civil Status
                                                (www.nscb.gov.ph)</h6>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                                </svg></span>
                                        </button>

                                    </h2>

                                    <div id="percentage_of_male_female_household" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#demography">



                                        <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">

                                            <tr>

                                                <th>Status</th>
                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>
                                                <td>Single</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m30" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f30" id="" value="0" /> </td>
                                            </tr>
                                            <tr>
                                                <td>Maried - Active</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m31" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f31" id="" value="0" /> </td>
                                            </tr>
                                            <tr>
                                                <td>Married - Separated</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m32" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f32" id="" value="0" /> </td>
                                            </tr>
                                            <tr>
                                                <td>Divorced</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m33" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f33" id="" value="0" /> </td>
                                            </tr>
                                            <tr>
                                                <td>Live-in Arrangement - Active</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m34" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f34" id="" value="0" /> </td>
                                            </tr>
                                            <tr>
                                                <td>Live-n Arrangement - Sepearated</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m35" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f35" id="" value="0" /> </td>
                                            </tr>
                                            <tr>
                                                <td>Widowed</td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="m36" id="" value="0" /> </td>
                                                <td><input onkeypress="return onlyNumberKey(event)" type="text"
                                                        name="f36" id="" value="0" /> </td>
                                            </tr>
                                        </table>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <br />

                            <br />

                            <!--  -->
                            <?php  require("./layout/soc_dev_footer.php");  ?>





            </form>


        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script src="./script/script.js">
    </script>



</body>

</html>