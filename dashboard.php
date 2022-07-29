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

    .chart_container {
        position: relative;
    }

    .chart_container .overlay {
        min-height: 400px;
        width: 100%;
        position: absolute;
        top: 0;
        background: linear-gradient(black, rgba(0, 0, 0, 0.6));
        left: 0;
    }

    .chart {
        position: relative;
        z-index: 4;
        background: white;
    }

    .people_count {
        position: relative;
        z-index: 4;
    }

    .people_count .box {
        position: relative;
        z-index: 4;

    }

    .people_count .box {
        background: white;
        width: 300px;

        max-width: 300px;
        border-radius: 20px;
        position: relative;
        text-align: center;
        animation: people_box linear 300ms 1;
    }

    .people_count .box .img {
        position: absolute;
        transform: translate(-50px, -50px);
        background: white;
        border-radius: 50px;
        animation: people_box_img linear 300ms 1;
    }

    .forms {
        position: relative;
        z-index: 4;
    }

    .forms .form {
        background: white;
        display: flex;
        align-items: center;

    }

    .forms .form {
        position: relative;

    }

    .forms .form .count {
        position: absolute;
        top: 0;
        right: 0;
        background: rgb(255, 62, 143);
        color: white;
        width: 35px;
        height: 35px;
        border-radius: 50px;
        transform: translate(10px, -10px);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .forms .form .count h3 {
        font-size: 20px;

        margin: 0;

    }


    @keyframes people_box_img {
        0% {
            transform: translateY(-20px)
        }

        100 {
            transform: translateY(0)
        }
    }

    @keyframes people_box {
        0% {
            transform: translateY(20px)
        }

        100 {
            transform: translateY(0)
        }
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

            <div class="container-fluid p-0  px-3 col-md-9 chart_container" style="position:relative">

                <h2 style="font-weight:300;color:white;position:relative;z-index:4" class="py-3">Welcome to GAD
                    Dashboard!!</h2>
                <div class="people_count d-flex justify-content-end align-items-end flex-column w-75 m-auto">
                    <p style="color:white ;transform:translateX(30px)">No. of Respondents in <span
                            style="font-weight:bold">Santa Cruz Marinduque</span> </p>
                    <div class="box shadow">
                        <div class="img" style="max-width:80px">
                            <img src="./assets/images/people.png" alt="">
                        </div>

                        <h1>33,000</h1>
                    </div>



                </div>


                <div class="forms d-flex">



                    <div class="form form1 m-3 shadow py-2 px-3" style="border-radius:20px">

                        <div class="count shadow ">

                            <?php

$primary_education_results = $dbconnection->query("SELECT * FROM primary_education");
$secondary_education_results = $dbconnection->query("SELECT * FROM secondary_education");
$tertiary_education_results = $dbconnection->query("SELECT * FROM tertiary_education");

if(isset($primary_education_results ) && isset($secondary_education_results ) && isset($tertiary_education_results )){    ?>


                            <h3> <?php   echo $primary_education_results ->num_rows + $secondary_education_results ->num_rows + $tertiary_education_results ->num_rows ?>
                            </h3>


                            <?php
}

?>
                        </div>
                        <div class="img shadow" style="max-width:50px;border-radius:50px;">
                            <img src="./assets/images/school.png" alt="">
                        </div>
                        <h6 class=" px-2">SCHOOL</h6>
                    </div>
                    <div class="form form2 m-3 shadow py-2 px-3" style="border-radius:20px">
                        <div class="count shadow ">
                            <?php

$results = $dbconnection->query("SELECT * FROM social_development");

if(isset($results)){    ?>


                            <h3> <?php   echo $results->num_rows;  ?> </h3>


                            <?php
}

?>
                        </div>
                        <div class="img shadow" style="max-width:50px;border-radius:50px;">
                            <img src="./assets/images/barangay.png" alt="">
                        </div>
                        <h6 class="px-2">BARANGAY</h6>

                    </div>


                </div>
                <div class="overlay"></div>

                <div class="charts d-flex  flex-wrap w-100">

                    <!--  -->
                    <div style="border-radius:20px;max-width:700px"
                        class=" chart social_development_chart my-3 mx-5 shadow py-4 px-4">
                        <canvas id="household_population_by_age_and_sex_chart" with="400" height="400"></canvas>
                    </div>
                    <!--  -->
                    <div style="border-radius:20px;max-width:700px;"
                        class="chart social_development_chart my-3 mx-5 shadow py-3 px-3">
                        <canvas id="pie_chart"></canvas>
                    </div>


                </div>
                <div class="charts d-flex  flex-wrap w-100">

                    <div style="border-radius:20px;max-width:1000px;"
                        class="chart social_development_chart my-3 m-auto mx-5 shadow py-3 px-3">
                        <h6 class="text-center">Poverty</h6>
                        <canvas id="household_whose_eat_less_than_three_chart" width="700"></canvas>
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
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Most Job'
                }
            }
        }


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