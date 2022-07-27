<?php


require("../process/school/retrieve.php");
require("../process/school/drop.php");
require("../process/school/edit.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/main.css">
    <link rel="icon" href="./assets/images/santacruz.png">
    <link rel="stylesheet" href="./school.css">
    <title>Secondary Education</title>
</head>

<body>



    <style>
    select:focus {
        border: none !important;
        box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.5) !important;
    }

    .accordion-button:not(.collapsed) {
        color: black;
        background: black;
        color: white;

    }

    .accordion-button:not(.collapsed)::after svg {
        color: black;
        fill: black;
    }

    .accordion-item {
        background: rgba(165, 165, 165, .5);
        border: none;

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


    .record_lists {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100vh;
        z-index: 5000;
        background: rgba(0, 0, 0, .5);
        display: flex;
        transform: translateX(100%);
        transition: all ease-in 300ms;

    }

    .record_lists .overlay {
        flex: 1;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;

    }

    .record_lists .overlay:hover {
        background: rgba(0, 0, 0, .2);
        transition: all ease-in 300ms;

    }

    .record_lists .overlay:hover svg {

        transform: translateX(-5px);
        transition: all ease-in 300ms;
    }

    .record_lists .record_data {
        width: 50%;
        max-width: 50%;
        background: white;
    }

    .record_lists_show {
        transform: translateX(0%);
        transition: all ease-in 300ms;

    }

    .record_btn {
        position: relative;

    }

    .record_btn .count {
        position: absolute;
        top: 0;
        left: 0;
        width: 25px;
        height: 25px;
        transform: translate(-15px, -15px);
        border-radius: 50px;
        background: rgb(255, 62, 143);
    }
    </style>


    <div class="conatainer_fluid">

        <div class="row">


            <?php

if(isset($_COOKIE["popup_modal"])){
    if($_COOKIE["popup_modal"]==="saverecord")
require("..//modal/success.php");

}


?>


            <?php

if(isset($_COOKIE["popup_modal"])){
    if($_COOKIE["popup_modal"]==="deleterecord")
require("../modal/deleted.php");

}


?>


            <div class="powered">
                <img src="../assets/images/gad.png" alt="">
            </div>

            <?php

require("../layoutsidebar/sidebar.php")
?>


            <div class="container-fluid p-0 w-100  px-3 col ">
                <form action="/barangay/process/school/secondary.php" method="POST">

                    <div class="burger_menu p-2 shadow col " style="border-radius:50px;">
                        <button class="navbar-toggler p-0 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                                width="50px" fill="#fff" height="50px" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m13 16.745c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm9-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm-4-5c0-.414-.336-.75-.75-.75h-14.5c-.414 0-.75.336-.75.75s.336.75.75.75h14.5c.414 0 .75-.336.75-.75z"
                                    fill-rule="nonzero" />
                            </svg>
                        </button>

                    </div>


                    <div class="container-fluid p-0 w-100  px-3 col ">
                    <div style="position:sticky;top:0;left:0;right:0;background:white;z-index:5">

                        <div class="text-center py-2" style="background:black;color:white">
                            <h4 class="py-3">SECONDARY SCHOOL</h4>

                        </div>

                        <br>

                        <div class="d-flex justify-content-between align-content-center flex-wrap">

                            <div class="d-flex flex-wrap">

                                <div class="d-flex align-items-center mx-2">
                                    <h6 style="background:black;color:white;width:max-content;clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);" class="m-0 mx-1 px-5 py-3">SCHOOL YEAR:</h6>
                                    <select class="form-select  " aria-label="Default select example" name="school_year"
                                        onchange="secondarySchoolYearSession(this)" style="width:max-content">

                                        <?php 
                                if(isset($_COOKIE["secondary_school_year"])){  ?>
                                        <option hidden value='<?php  echo $_COOKIE["secondary_school_year"]  ?>'>
                                            <?php  echo $_COOKIE["secondary_school_year"]  ?></option>
                                        <?php  } ?>

                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2019-2020">2019-2020</option>
                                        <option value="2017-2018">2017-2018</option>

                                    </select>

                                </div>
                                <div class="d-flex align-items-center mx-2">
                                    <h6 style="background:black;color:white;width:max-content;clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);" class="m-0 mx-1 px-5 py-3">SCHOOL NAME:</h6>
                                    <select class="form-select  " aria-label="Default select example" name="school_name"
                                        onchange="secondarySchoolNameSession(this)" style="width:max-content">
                                        <?php 
                                if(isset($_COOKIE["secondary_school_name"])){  ?>
                                        <option hidden value='<?php  echo $_COOKIE["secondary_school_name"]  ?>'>
                                            <?php  echo $_COOKIE["secondary_school_name"]  ?></option>
                                        <?php  } ?>
                                        <option value="Kilo-Kilo National High School">Kilo-Kilo National High School
                                        </option>
                                        <option value="Maniwaya National High School">Maniwaya National High School
                                        </option>
                                        <option value="Marinduque State College">Marinduque State College </option>
                                        <option value="Matalaba National High School">Matalaba National High School
                                        </option>
                                        <option value="Mongpong National High School">Mongpong National High School
                                        </option>
                                        <option value="Polo National High School">Polo National High School </option>

                                    </select>

                                </div>

                            </div>


                            <div class="d-flex">

                                <button class="py-2 px-3 shadow m-2 record_btn" style="background:#4169E1;color:white;"
                                    id="print" type="button" onclick="recordsToggle()">

                                    <div class="count">
                                        <p> <?php  echo $secondaryresults->num_rows ?> </p>
                                    </div>

                                    <p> records <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="#fff">
                                            <path
                                                d="M7.972 2h-6.972l.714 5h2.021l-.429-3h3.694c1.112 1.388 1.952 2 4.277 2h9.283l-.2 1h2.04l.6-3h-11.723c-1.978 0-2.041-.417-3.305-2zm16.028 7h-24l2 13h20l2-13z" />
                                        </svg></p>


                                </button>


                                <button class="py-2 px-3 m-2 shadow" style="background:#1E90FF;color:white"
                                    name="secondary_education" type="submit">
                                    <p>Save <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="#fff">
                                            <path
                                                d="M14 3h2.997v5h-2.997v-5zm9 1v20h-22v-24h17.997l4.003 4zm-17 5h12v-7h-12v7zm14 4h-16v9h16v-9z" />
                                        </svg>
                                </button>
                            </div>


                        </div>
                        <br>
                        </div>

                        <div class="secondary_school">

                            <br>
                            <br>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordionone" aria-expanded="false"
                                        aria-controls="accordionone">
                                        <h6 class="p-0"> secondary education form
                                        </h6>

                                    </button>

                                </h2>
                                <div id="accordionone" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#secondary_school">

                                    <section>
                                        <h6 class="p-0 pt-3 w-75 m-auto "> Ratio of girls to boys in secondary education
                                        </h6>
                                        <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                            <tr>

                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>

                                                <td> <input type="text" name="m1" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php echo isset($secondary_row) ? $secondary_row["m1"] : 0  ?>" />
                                                </td>
                                                <td> <input type="text" name="f1" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php echo isset($secondary_row) ? $secondary_row["f1"] : 0  ?>" />
                                                </td>
                                            </tr>
                                        </table>

                                        <br>
                                    </section>

                                    <section>
                                        <h6 class="p-0 pt-3 w-75 m-auto "> Highschool School Completion Rate, by Sex
                                        </h6>
                                        <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                            <tr>

                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>

                                                <td> <input type="text" name="m2" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php echo isset($secondary_row) ? $secondary_row["m2"] : 0  ?>" />
                                                </td>
                                                <td> <input type="text" name="f2" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php echo isset($secondary_row) ? $secondary_row["f2"] : 0  ?>" />
                                                </td>
                                            </tr>
                                        </table>

                                        <br>
                                    </section>

                                    <section class="w-75 m-auto">
                                        <h6 class=" pt-3  "> Classroom to pupil ratio
                                        </h6>
                                        <div style="border:1px solid black">
                                            <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">
                                                <tr class="d-flex justify-content-center">
                                                    <th>No. of classrooms (Highschool)</th>
                                                </tr>
                                                <tr class="d-flex justify-content-center">
                                                    <td> <input type="text" name="num1" id=""
                                                            value="<?php echo isset($secondary_row) ? $secondary_row["num1"] : 0  ?>" />
                                                    </td>

                                                </tr>
                                            </table>
                                            <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                                <tr>

                                                    <th>Male</th>
                                                    <th>Female</th>
                                                </tr>
                                                <tr>

                                                    <td> <input type="text" name="m3" id=""
                                                            onkeypress="return onlyNumberKey(event)"
                                                            value="<?php echo isset($secondary_row) ? $secondary_row["m3"] : 0  ?>" />
                                                    </td>
                                                    <td> <input type="text" name="f3" id=""
                                                            onkeypress="return onlyNumberKey(event)"
                                                            value="<?php echo isset($secondary_row) ? $secondary_row["f3"] : 0  ?>" />
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>

                                        </div>
                                        <br>


                                    </section>


                                    <section class="w-75 m-auto">
                                        <h6 class="  pt-3  "> Teacher to pupil ratio
                                        </h6>
                                        <div style="border:1px solid black">
                                            <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">
                                                <tr class="d-flex justify-content-center">
                                                    <th>No. of classrooms (Highschool)</th>
                                                </tr>
                                                <tr class="d-flex justify-content-center">
                                                    <td> <input type="text" name="num2" id=""
                                                            onkeypress="return onlyNumberKey(event)"
                                                            value="<?php echo isset($secondary_row) ? $secondary_row["num2"] : 0  ?>" />
                                                    </td>

                                                </tr>
                                            </table>
                                            <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                                <tr>

                                                    <th>Male</th>
                                                    <th>Female</th>
                                                </tr>
                                                <tr>

                                                    <td> <input type="text" name="m4" id=""
                                                            onkeypress="return onlyNumberKey(event)"
                                                            value="<?php echo isset($secondary_row) ? $secondary_row["m4"] : 0  ?>" />
                                                    </td>
                                                    <td> <input type="text" name="f4" id=""
                                                            onkeypress="return onlyNumberKey(event)"
                                                            value="<?php echo isset($secondary_row) ? $secondary_row["f4"] : 0  ?>" />
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>

                                        </div>
                                        <br>


                                    </section>

                                </div>
                            </div>

                            <br>
                            <br>



                        </div>


                    </div>
                </form>


                <!-- records start-->

                <div class="record_lists">


                    <div class="overlay" onclick="recordsToggle()">
                        <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                clip-rule="evenodd" fill="#fff">
                                <path
                                    d="M2.117 12l7.527 6.235-.644.765-9-7.521 9-7.479.645.764-7.529 6.236h21.884v1h-21.883z" />
                            </svg></span>

                        <div>BACK</div>
                    </div>

                    <div class="record_data" style="overflow:auto;">
                        <h6 class="text-center py-3 " style="background: #4169e1; color:white"> SCHOOL RECORDS
                        </h6>

                        <div class="d-flex justify-content-end">
                            <button class="py-2 px-3 shadow  m-2" onclick="recordsToggle()"
                                style="background:#32CD32;font-weight:bold;color:white;">
                                create new record <span>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="24"
                                        fill="#fff" height="24" stroke-miterlimit="2" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m11 11h-7.25c-.414 0-.75.336-.75.75s.336.75.75.75h7.25v7.25c0 .414.336.75.75.75s.75-.336.75-.75v-7.25h7.25c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-7.25v-7.25c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </span> </button>
                        </div>

                        <!-- lists -->



                        <?php
$secondaryresults = $dbconnection->query("SELECT * FROM secondary_education");

    if(isset($secondaryresults)){
if($secondaryresults->num_rows > 0){


while($dbrow = $secondaryresults->fetch_assoc() ){  ?>


                        <div class="d-flex justify-content-between align-items-center py-3 px-3 shadow">
                            <div class="d-flex align-items-center">
                                <h6 class="m-0"> <?php  echo $dbrow["schoolName"]  ?> </h6> -
                                <?php  echo $dbrow["schoolYear"]  ?>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="dots_dropdown d-flex align-items-center p-1 justify-content-center"
                                        style="cursor:pointer;">

                                        <div class="drop_down shadow ">
                                            <a
                                                href="/barangay/process/view_school.php?secondary_school_name=<?php echo $dbrow["schoolName"] ?>&secondary_school_year=<?php echo $dbrow["schoolYear"]  ?> ">
                                                <button class="py-2 px-3 mb-1" style="background:#32CD32;color:white;">
                                                    view</button>
                                            </a>

                                            <a
                                                href="secondary.php?secondary_school_name=<?php echo $dbrow["schoolName"] ?>&secondary_school_year=<?php echo $dbrow["schoolYear"]  ?> ">
                                                <button class="py-2 px-3 mb-1"
                                                    style="background:#1E90FF;color:white;">edit</button></a>
                                            <a href="secondary.php?secondary_drop_id=<?php echo $dbrow["id"] ?> ">
                                                <button class="py-2 px-3 mb-1"
                                                    style="background:#DC143C;color:white;">delete</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
}
}}
?>


                        <!-- lists -->
                    </div>
                </div>


                <!-- records ends-->

            </div>

        </div>
    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"> </script>
    <script src="../script/script.js"> </script>

    <script>
    function secondarySchoolYearSession(e) {
        document.cookie = `secondary_school_year = ${e.value} ; expires=Thu, 18 Dec 3000 12:00:00 UTC`;
        window.location.reload();
    }

    function secondarySchoolNameSession(e) {
        document.cookie = `secondary_school_name = ${e.value} ; expires=Thu, 18 Dec 3000 12:00:00 UTC`;
        window.location.reload();
    }
    const recordList = document.querySelector(".record_lists");

    function recordsToggle() {
        recordList.classList.toggle("record_lists_show");
    }
    </script>

</body>

</html>