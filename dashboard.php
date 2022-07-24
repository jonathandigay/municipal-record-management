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
    </style>



    <div class="container-fluid">




        <div class="row">

            <div class="powered">
                <img src="./assets/images/gad.png" alt="">
            </div>


            <?php
require("./layoutsidebar/sidebar.php");

?>




            <div class="container-fluid p-0  px-3 col-md-9 chart_container">
                <div class=" d-flex my-2 align-items-center justify-content-between flex-wrap">




                </div>
                <!-- <h1 class="page_title text-center">Social Development Chart</h1> -->

                <div class="charts d-flex">

                    <!--  -->
                    <div class="d-flex">
                        <div class="social_development_chart my-3 mx-5 shadow py-3 px-3" style="max-width:400px">
                            <canvas id="household_population_by_age_and_sex_chart" with="400" height="400"></canvas>
                        </div>
                    </div>
                    <!--  -->
                    <div class="social_development_chart my-3 mx-5 shadow py-3 px-3"
                        style="width:700px;max-width:700px">
                        <h6 class="text-center">Poverty</h6>
                        <canvas id="household_whose_eat_less_than_three_chart"></canvas>
                    </div>
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
                    'rgb(255,102,255 )',
                    'rgb(54, 162, 235 )',
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


    // household_whose_eat_less_than_three_chart
    const ctx2 = document.getElementById('household_whose_eat_less_than_three_chart').getContext("2d")




    const ctx2data = {
        labels: [
            "2017-2018",
            "2019-2020",
            "2021-2022",
            "2021-2022",
        ],
        datasets: [{
            data: ["40", "70", "30", "5"],
            label: "Percentage per year",
            fill: false,
            pointStyle: "rectoRot",
            pointRadius: 5,
            borderColor: 'rgb(54, 162, 235 )',


            backgroundColor: [
                'rgb(255,102,255 )',
            ],
        }]
    }
    const ctx2config = {
        type: "line",
        data: ctx2data,


    }

    const myChart2 = new Chart(ctx2, ctx2config);
    // household_whose_eat_less_than_three_chart
    </script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>