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

    button:hover {

        opacity: .7;
        transform: translateY(-2px);
        transition: all ease-n 300ms;
    }

    .title {
        position: absolute;
        z-index: -1;
    }

    .back_dashboard {
        position: fixed;
        top: 10px;
        left: 10px;
    }
    </style>



    <div class="container-fluid">


        <?php

require("./layout/logo.php");

?>


        <div class="row">

            <div class="powered">
                <img src="./assets/images/gad.png" alt="">
            </div>


            <?php
require("./layoutsidebar/sidebar.php");

?>


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

            <div class="container-fluid p-0  px-3 col-md-9 chart_container">
                <div class=" d-flex my-2 align-items-center justify-content-between flex-wrap">






                </div>

                <div class="charts d-flex flex-wrap">

                    <!--  -->
                    <div class="d-flex">
                        <div style="border-radius:20px;" class="social_development_chart my-3 mx-5 shadow py-4 px-4"
                            style="max-width:700px">
                            <canvas id="household_population_by_age_and_sex_chart" with="400" height="400"></canvas>
                        </div>
                    </div>
                    <!--  -->
                    <div style="border-radius:20px;" class="social_development_chart my-3 mx-5 shadow py-3 px-3"
                        style="width:700px;max-width:700px">
                        <h6 class="text-center">Popular job </h6>
                        <canvas id="pie_chart"></canvas>
                    </div>


                </div>

                <div style="border-radius:20px;" class="social_development_chart my-3 mx-5 shadow py-3 px-3"
                    style="width:700px;max-width:700px">
                    <h6 class="text-center">Poverty</h6>
                    <canvas id="household_whose_eat_less_than_three_chart" width="700"></canvas>
                </div>



            </div>

        </div>


    </div>
    </div>

    <script src="./script/chart.js"></script>
    <script src="./script/script.js"></script>

    <script>
    // household_population_by_age_and_sex_chart
    const ctx1 = document.getElementById('household_population_by_age_and_sex_chart')
    const myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Female', 'male'],
            datasets: [{
                label: 'Household Population by Age and Sex (psa.gov.ph)',
                data: [500, 200],
                backgroundColor: [

                    'rgb(54, 162, 235 )',
                    'rgb(255,102,255 )',
                ],

                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    // household_population_by_age_and_sex_chart


    const ctx2 = document.getElementById('pie_chart').getContext("2d")




    const ctx2data = {
        labels: [
            "vendor",
            "trycycle",
            "jeepney",
            "others",
        ],
        datasets: [{
            data: ["40", "70", "30", "5"],
            label: "Percentage per year",
            fill: false,
            pointStyle: "rectoRot",
            pointRadius: 6,
            borderColor: 'rgb(54, 162, 235 )',


            backgroundColor: [
                'rgb(255,102,255 )',
                'rgb(54, 162, 235 )',
                '#e60995',
                '#efdd93'

            ],
        }]
    }
    const ctx2config = {
        type: "pie",
        data: ctx2data,


    }

    const myChart3 = new Chart(ctx2, ctx2config);

    // household_whose_eat_less_than_three_chart
    const ctx3 = document.getElementById('household_whose_eat_less_than_three_chart').getContext("2d")




    const ctx3data = {
        labels: [
            "2017-2018",
            "2019-2020",
            "2021-2022",
            "2021-2022",
        ],
        datasets: [{
            data: ["40", "30", "50", "40"],
            label: "Percentage per year",
            fill: false,
            pointStyle: "rectoRot",
            pointRadius: 6,
            borderColor: 'rgb(54, 162, 235 )',


            backgroundColor: [
                'rgb(255,102,255 )',
            ],
        }]
    }
    const ctx3config = {
        type: "line",
        data: ctx3data,


    }

    const myChart2 = new Chart(ctx3, ctx3config);
    // household_whose_eat_less_than_three_chart
    </script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>