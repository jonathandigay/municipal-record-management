<?php  

require("../middleware/checklogin.php");
require("../database/connection.php");
$popu_age_result = $dbconnection->query("SELECT * FROM soc_dev_demography_population_age_sex");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/main.css">
    <link rel="icon" href="../assets/images/santacruz.png">
    <title>demography records</title>
</head>



<body>

    <style>
    * {
        padding: 0;
        margin: 0;
    }

    tr {
        /* border-bottom: 3px solid black; */
    }

    td button {
        background: black;
        color: white;
    }

    .header {
        background: white;
        z-index: 1000;
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



    <div class="container-fluid position-relative">
        <div class="row">
            <?php
require("../layoutsidebar/sidebar.php");

?>

            <div class="container-fluid p-0 py-3 px-3 col-md-9 ">
                <div class="header position-sticky top-0 shadow">
                    <div class="title text-center  py-2" style="background:black;color:white;">
                        <h5 class="m-0">Social Development Records</h5>
                    </div>
                    <div class=" d-flex my-2 align-items-center justify-content-center ">

                        <div class="d-flex my-2 align-items-center justify-content-center">

                            <div class="d-flex align-items-center mx-2 justify-content-center">
                                <h6 class="m-0 mx-1">YEAR:</h6>
                                <select class="form-select" aria-label="Default select example" name="year">
                                    <option selected value="2020-2022">2020-2022</option>
                                    <option value="2018-2019">2018-2019</option>
                                    <option value="2017-2018">2017-2018</option>
                                    <option value="2016-2017">2016-2017</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>

                <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">

                    <tr style="background:black;color:white;">
                        <th class="d-flex align-items-center">
                            <h5 class="px-3 py-2">Barangay</h5> <span><svg width="24" height="24"
                                    xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z" />
                                </svg></span>
                        </th>
                    </tr>

                    <tr class="d-flex justify-content-between align-items-center py-2 px-3 shadow">
                        <td>
                            <h6>Kinyaman</h6>
                        </td>

                        <td> <button class="py-2 px-3 shadow">View Details <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                                    <path
                                        d="M1.979 8l-.979-6h6.972c1.265 1.583 1.327 2 3.306 2h11.722l-.96 4h-2.04l.469-2h-9.191c-2.326 0-3.166-.612-4.278-2h-3.694l.694 4h-2.021zm22.021 2l-2 12h-20l-2-12h6.278l2.308-3 3.9 3h1.97l-1.429-1.097 1.465-1.903 3.9 3h5.608zm-2.331 2h-19.338l1.385 8h16.568l1.385-8z" />
                                </svg></button></td>
                    </tr>

                    <tr class="d-flex justify-content-between align-items-center py-2 px-3 shadow">
                        <td>
                            <h6>Kil0-kilo</h6>
                        </td>

                        <td> <button class="py-2 px-3">View Details <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="#fff">
                                    <path
                                        d="M1.979 8l-.979-6h6.972c1.265 1.583 1.327 2 3.306 2h11.722l-.96 4h-2.04l.469-2h-9.191c-2.326 0-3.166-.612-4.278-2h-3.694l.694 4h-2.021zm22.021 2l-2 12h-20l-2-12h6.278l2.308-3 3.9 3h1.97l-1.429-1.097 1.465-1.903 3.9 3h5.608zm-2.331 2h-19.338l1.385 8h16.568l1.385-8z" />
                                </svg></button></td>
                    </tr>

                </table>
            </div>

            <div class="details">
                <div class="content">
                    <h3>something texts</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>