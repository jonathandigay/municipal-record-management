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

            <form action="education.php" method="POST" class="container-fluid p-0 w-100  px-3 col ">


                <div>
                    <div class="header position-sticky top-0 shadow">
                        <div class="title text-center  py-2" style="background:black;color:white;">
                            <h5 class="m-0 py-3 page_title">Social Development Sector / Education</h5>
                        </div>
                        <?php require("./layout/soc_dev_header.php"); ?>


                    </div>


                    <div class="row mt-3">
                        <div class="accordion mb-3" id="demography">
                            <!--  -->
                            <div class="accordion" id="demography">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button d-flex justify-content-between shadow"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#percentage_of_male_female_household" aria-expanded="false"
                                            aria-controls="percentage_of_male_female_household">
                                            <h6 class="p-0"> Percentage of Popuation 6-24 years old by level currently
                                                attending by Age, Group and by Sex</h6>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                                </svg></span>
                                        </button>

                                    </h2>

                                    <div id="percentage_of_male_female_household"
                                        class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#demography">



                                        <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">

                                            <tr>

                                                <th>Status</th>
                                                <th>Male</th>
                                                <th>Female</th>
                                            </tr>
                                            <tr>
                                                <td>Not currently attending</td>
                                                <td><input type="text" name="m37" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m37"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f37" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f37"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Attending</td>
                                                <td><input type="text" name="m38" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m38"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f38" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f38"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kinder/Prep/Nursery</td>
                                                <td><input type="text" name="m39" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m39"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f39" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f39"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Elementary</td>
                                                <td><input type="text" name="m40" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m40"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f40" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f40"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Highschoool</td>
                                                <td><input type="text" name="m41" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m41"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f41" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f41"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Post Secondary</td>
                                                <td><input type="text" name="m42" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m42"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f42" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f42"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>College</td>
                                                <td><input type="text" name="m43" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m43"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f43" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f43"] : 0;  ?>" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Post-graduate</td>
                                                <td><input type="text" name="m44" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["m44"] : 0;  ?>" />
                                                </td>
                                                <td><input type="text" name="f44" id=""
                                                        onkeypress="return onlyNumberKey(event)"
                                                        value="<?php  echo  isset($rowresult) ?  $rowresult["f44"] : 0;  ?>" />
                                                </td>
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

    <script src="./script/script.js"></script>




</body>

</html>