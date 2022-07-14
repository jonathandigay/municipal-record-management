<?php  

require("./middleware/checklogin.php");
require("database/connection.php");
$popu_age_result = $dbconnection->query("SELECT * FROM soc_dev_demography_population_age_sex");




?>

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
        border-left: 1px solid black;
        border-top: 1px solid black;
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
require("./layoutsidebar/sidebar.php");

?>




            <form action="./process/demography.php" method="POST" class="container-fluid p-0 py-3 px-3 col-md-9 ">


                <div>
                    <div class="header position-sticky top-0 shadow">
                        <div class="title text-center  py-2" style="background:black;color:white;">
                            <h5 class="m-0">Social Development Sector / Demography</h5>
                        </div>
                        <div class=" d-flex my-2 align-items-center justify-content-between ">

                            <div class="d-flex my-2 align-items-center ">
                                <div class=" d-flex align-items-center mx-2">
                                    <h6 class="m-0 mx-1">BARANGAY:</h6>
                                    <select class="form-select" aria-label="Default select example" name="barangay"
                                        name="barangay" onchange="barangaySession(this)">

                                        <?php
                                    require("./arrays/barangay.php");
                                       $count =count($barangay);
                                       $i =0;
                                       for($i; $i < $count; $i++){
                                       ?>
                                        <option value=<?php echo $barangay[$i]   ?>><?php echo $barangay[$i]   ?>
                                        </option>
                                        <?php  };?>
                                    </select>

                                </div>
                                <div class="d-flex align-items-center mx-2">
                                    <h6 class="m-0 mx-1">YEAR:</h6>
                                    <select class="form-select" aria-label="Default select example" name="year">
                                        <option selected value="2020-2022">2020-2022</option>
                                        <option value="2018-2019">2018-2019</option>
                                        <option value="2017-2018">2017-2018</option>
                                        <option value="2016-2017">2016-2017</option>

                                    </select>
                                </div>
                            </div>

                            <div class="print d-flex justify-content-end m-3 ">
                                <a href="./records/demography.php" target="_self">
                                    <button class="py-2 px-3 shadow m-2" id="print" type="button">
                                        <p> records <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M7.972 2h-6.972l.714 5h2.021l-.429-3h3.694c1.112 1.388 1.952 2 4.277 2h9.283l-.2 1h2.04l.6-3h-11.723c-1.978 0-2.041-.417-3.305-2zm16.028 7h-24l2 13h20l2-13z" />
                                            </svg></p>
                                    </button>
                                </a>
                                <button class="py-2 px-3 m-2 shadow" name="demography" type="submit">
                                    <p>Save <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M14 3h2.997v5h-2.997v-5zm9 1v20h-22v-24h17.997l4.003 4zm-17 5h12v-7h-12v7zm14 4h-16v9h16v-9z" />
                                        </svg>
                                </button>

                            </div>

                        </div>

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
                                <div id="totalhouseholdbyageandsex" class="accordion-collapse collapse "
                                    aria-labelledby="headingOne" data-bs-parent="#demography">



                                    <div id="printcontent">
                                        <table class="w-75 m-auto mb-3 my-4 p-4 ">

                                            <tr>
                                                <th>Ages</th>
                                                <th>Male</th>
                                                <th>Female</th>
                                                <th>Total</th>
                                            </tr>

                                            <tr>
                                                <td>all ages</td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>

                                            </tr>

                                            <?php

                                            require("./arrays/allages.php");

                                            $count =count($all_ages);
                                            $i =0;
                                            for($i; $i < $count; $i++){
                                            ?> <tr>
                                                <td><?php echo $all_ages[$i] ; ?></td>
                                                <td> <input class="w-100" type="text" class="px-2"
                                                        name="m<?php echo $i +1 ; ?>" value="0"
                                                        onkeypress="return onlyNumberKey(event)" />
                                                </td>
                                                <td><input class="w-100" type="text" class="px-2"
                                                        name="f<?php echo $i +1 ; ?>" value="0"
                                                        onkeypress="return onlyNumberKey(event)" />
                                                </td>
                                                <td>
                                                </td>

                                            </tr>
                                            <?php  };?>
                                        </table>

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
                                    <div id="sexindex" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#demography">


                                        <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                            <tr>

                                                <th>Male</th>
                                                <th>Female</th>
                                                <th>Total</th>
                                            </tr>
                                            <tr>

                                                <td> <input type="text" name="m22" id="" value="0" /> </td>
                                                <td> <input type="text" name="f22" id="" value="0" /> </td>
                                                <td>0</td>
                                            </tr>
                                        </table>
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
                                                <th>Toal</th>
                                            </tr>
                                            <tr>
                                                <td>Single</td>
                                                <td><input type="text" name="m23" id="" value="0" /> </td>
                                                <td><input type="text" name="f23" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Maried - Active</td>
                                                <td><input type="text" name="m24" id="" value="0" /> </td>
                                                <td><input type="text" name="f24" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Married - Separated</td>
                                                <td><input type="text" name="m25" id="" value="0" /> </td>
                                                <td><input type="text" name="f25" id="" value="0" /> </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Divorced</td>
                                                <td><input type="text" name="m26" id="" value="0" /> </td>
                                                <td><input type="text" name="f26" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Live-in Arrangement - Active</td>
                                                <td><input type="text" name="m27" id="" value="0" /> </td>
                                                <td><input type="text" name="f27" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Live-n Arrangement - Sepearated</td>
                                                <td><input type="text" name="m28" id="" value="0" /> </td>
                                                <td><input type="text" name="f28" id="" value="0" /> </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Widowed</td>
                                                <td><input type="text" name="m29" id="" value="0" /> </td>
                                                <td><input type="text" name="f29" id="" value="0" /> </td>
                                                <td>0</td>
                                            </tr>
                                        </table>
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

                                                <td class="text-center"><input type="text" name="householdaverage"
                                                        id="" /> </td>
                                            </tr>
                                        </table>
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
                                                <th>Toal</th>
                                            </tr>
                                            <tr>
                                                <td>Single</td>
                                                <td><input type="text" name="m30" id="" value="0" /> </td>
                                                <td><input type="text" name="f30" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Maried - Active</td>
                                                <td><input type="text" name="m31" id="" value="0" /> </td>
                                                <td><input type="text" name="f31" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Married - Separated</td>
                                                <td><input type="text" name="m32" id="" value="0" /> </td>
                                                <td><input type="text" name="f32" id="" value="0" /> </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Divorced</td>
                                                <td><input type="text" name="m33" id="" value="0" /> </td>
                                                <td><input type="text" name="f33" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Live-in Arrangement - Active</td>
                                                <td><input type="text" name="m34" id="" value="0" /> </td>
                                                <td><input type="text" name="f34" id="" value="0" /> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Live-n Arrangement - Sepearated</td>
                                                <td><input type="text" name="m35" id="" value="0" /> </td>
                                                <td><input type="text" name="f35" id="" value="0" /> </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Widowed</td>
                                                <td><input type="text" name="m36" id="" value="0" /> </td>
                                                <td><input type="text" name="f36" id="" value="0" /> </td>
                                                <td>0</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />

                            <br />

                            <!--  -->
                            <div class="d-flex justify-content-center my-3">
                                <div class="mx-2">
                                    <label>Prepared By:</label> <input
                                        style="border:none;border-bottom:1px solid black;outline:none;"
                                        class="px-2 py-1" type="text" name="preparedby" placeholder="type name..." />
                                </div>

                                <div class="mx-2">

                                    <label>Reviewed By:</label> <input
                                        style="border:none;border-bottom:1px solid black;outline:none;"
                                        class="px-2 py-1" type="text" name="reviewedby" placeholder="type name..." />
                                </div>

                            </div>




            </form>


        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script>
    function onlyNumberKey(evt) {

        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }


    function printDiv() {
        var divContents = document.getElementById("printcontent").innerHTML;
        var a = window.open('', '', '');
        a.document.write('<html>');
        a.document.write('<body >');
        a.document.write(
            '<h5 style="text-align:center;">Total Household Polpulation by Age and sex (psa.gov.ph) </h5>',
            divContents,
        );
        a.document.write('</body> </html>');
        a.document.close();
        a.print();
    }

    function barangaySession(e) {
        console.log(e.value)

        document.cookie = `barangay = ${e.value}`;

    }
    </script>



</body>

</html>