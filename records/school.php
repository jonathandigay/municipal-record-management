<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/main.css">
    <title>School records</title>
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

    .dots_dropdown {
        position: relative;
    }

    .dots_dropdown h3 {
        opacity: 0.8;
    }

    .dots_dropdown:hover h3 {
        opacity: 1;
    }

    .dots_dropdown .drop_down {
        position: absolute;
        bottom: 0;
        transform: translateY(105%);
        max-width: 200px;
        flex-direction: column;
        z-index: 3;
        display: none;

    }

    .dots_dropdown .drop_down button {
        width: 100px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .dots_dropdown .drop_down_on {
        display: flex;
        transform: translateY(100%);
        transition: all easein 300ms;
    }

    .school_record_list:hover {
        background: #4169E1;
        color: white;
        opacity: .8;
        cursor: pointer;
    }

    .school_record_list:hover svg {
        fill: white;
    }
    </style>


    <div class="conatainer_fluid">

        <div class="row">


            <div class="powered">
                <img src="../assets/images/gad.png" alt="">
            </div>

            <?php

require("../layoutsidebar/sidebar.php")
?>

            <div class="container-fluid p-0 w-100  px-3 col ">

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
                    <div class="text-center py-2">
                        <h3>SCHOOL RECORDS</h3>
                    </div>

                    <br>


                    <section class="shadow">
                        <h4> <i>Primary education</i> </h4>

                        <div class="px-4">
                            <a href="/barangay/school/primary.php">
                                <button class="py-2 px-3 shadow  m-2"
                                    style="background:#32CD32;font-weight:bold;color:white;">
                                    create new record <span>
                                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="24"
                                            fill="#fff" height="24" stroke-miterlimit="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m11 11h-7.25c-.414 0-.75.336-.75.75s.336.75.75.75h7.25v7.25c0 .414.336.75.75.75s.75-.336.75-.75v-7.25h7.25c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-7.25v-7.25c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </span> </button></a>

                            <div class="d-flex align-items-center mx-2">
                                <h6 class="m-0 mx-1">SCHOOL YEAR:</h6>
                                <select class="form-select  " aria-label="Default select example" name="year"
                                    style="width:max-content" onchange="yearSession(this)">

                                    <option value="2021-2022">2021-2022</option>
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2017-2018">2017-2018</option>

                                </select>

                            </div>

                            <!--  -->
                            <div
                                class="d-flex justify-content-between align-items-center py-3 px-3 shadow school_record_list">
                                <div class="d-flex align-items-center flex-1">
                                    <h6 class="m-0"> Santa Cruz Instite </h6>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="dots_dropdown d-flex align-items-center p-1 justify-content-center"
                                            style="cursor:pointer;">

                                            <span style="pointer-events:none"><svg width="24" height="24"
                                                    xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                    clip-rule="evenodd">
                                                    <path
                                                        d="M14 19h-14v-1h14v1zm9.247-8.609l-3.247 4.049-3.263-4.062-.737.622 4 5 4-5-.753-.609zm-9.247 2.609h-14v-1h14v1zm0-6h-14v-1h14v1z" />
                                                </svg></span>
                                            <div class="drop_down shadow ">
                                                <button class="py-2 px-3 mb-1" style="background:#32CD32;color:white;">
                                                    view</button>

                                                <button class="py-2 px-3 mb-1"
                                                    style="background:#1E90FF;color:white;">edit</button>
                                                <button class="py-2 px-3 mb-1"
                                                    style="background:#DC143C;color:white;">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--  -->
                            <!--  -->
                            <div
                                class="d-flex justify-content-between align-items-center py-3 px-3 shadow school_record_list">
                                <div class="d-flex align-items-center flex-1">
                                    <h6 class="m-0"> Santa Cruz Instite </h6>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="dots_dropdown d-flex align-items-center p-1 justify-content-center"
                                            style="cursor:pointer;">

                                            <span style="pointer-events:none"><svg width="24" height="24"
                                                    xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                    clip-rule="evenodd">
                                                    <path
                                                        d="M14 19h-14v-1h14v1zm9.247-8.609l-3.247 4.049-3.263-4.062-.737.622 4 5 4-5-.753-.609zm-9.247 2.609h-14v-1h14v1zm0-6h-14v-1h14v1z" />
                                                </svg></span>
                                            <div class="drop_down shadow ">
                                                <button class="py-2 px-3 mb-1" style="background:#32CD32;color:white;">
                                                    view</button>

                                                <button class="py-2 px-3 mb-1"
                                                    style="background:#1E90FF;color:white;">edit</button>
                                                <button class="py-2 px-3 mb-1"
                                                    style="background:#DC143C;color:white;">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!--  -->
                        </div>



                    </section>
                    <br>
                    <br>
                    <!-- 



                    
                     -->
                    <section class="shadow">
                        <h4> <i>Secondary education</i> </h4>

                        <div class="px-4">
                            <a href="/barangay/school/secondary.php">
                                <button class="py-2 px-3 shadow  m-2"
                                    style="background:#32CD32;font-weight:bold;color:white;">
                                    create new record <span>
                                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="24"
                                            fill="#fff" height="24" stroke-miterlimit="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m11 11h-7.25c-.414 0-.75.336-.75.75s.336.75.75.75h7.25v7.25c0 .414.336.75.75.75s.75-.336.75-.75v-7.25h7.25c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-7.25v-7.25c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </span> </button></a>

                            <div class="d-flex align-items-center mx-2">
                                <h6 class="m-0 mx-1">SCHOOL YEAR:</h6>
                                <select class="form-select  " aria-label="Default select example" name="year"
                                    style="width:max-content" onchange="yearSession(this)">

                                    <option value="2021-2022">2021-2022</option>
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2017-2018">2017-2018</option>

                                </select>

                            </div>
                        </div>




                    </section>
                    <br>
                    <br>
                    <!-- 




                        
                     -->
                    <section class="shadow">
                        <h4> <i>Tertiary education</i> </h4>
                        <div class="px-4">
                            <a href="/barangay/school/tertiary.php">
                                <button class="py-2 px-3 shadow  m-2"
                                    style="background:#32CD32;font-weight:bold;color:white;">
                                    create new record <span>
                                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="24"
                                            fill="#fff" height="24" stroke-miterlimit="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m11 11h-7.25c-.414 0-.75.336-.75.75s.336.75.75.75h7.25v7.25c0 .414.336.75.75.75s.75-.336.75-.75v-7.25h7.25c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-7.25v-7.25c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </span> </button></a>

                            <div class="d-flex align-items-center mx-2">
                                <h6 class="m-0 mx-1">SCHOOL YEAR:</h6>
                                <select class="form-select  " aria-label="Default select example" name="year"
                                    style="width:max-content" onchange="yearSession(this)">

                                    <option value="2021-2022">2021-2022</option>
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2017-2018">2017-2018</option>

                                </select>

                            </div>
                        </div>

                    </section>
                    <br>
                    <br>


                </div>
            </div>
        </div>
    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"> </script>
    <script src="../script/script.js"> </script>

    <script>
    const dots = document.querySelectorAll(" .dots_dropdown");
    window.addEventListener("click", (e) => {

        if (e.target.className.includes("dots_dropdown")) {
            dots.forEach((btn) => {
                btn.addEventListener("click", () => {

                    dots.forEach((btns) => {
                        btns.childNodes[3].classList.remove("drop_down_on")
                    })

                    btn.childNodes[3].classList.add("drop_down_on")

                })
            })
        } else {
            dots.forEach((btns) => {
                btns.childNodes[3].classList.remove("drop_down_on")
            })
        }

    })
    </script>

</body>

</html>