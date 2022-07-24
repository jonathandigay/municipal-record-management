<nav id="sidebarMenu" class="col-md-3 col-lg-3  show  bg-light sidebar collapse border-3 px-2">



    <div class="sidebar-sticky ">

        <div class=" sidebar-brand ">
            <div class=" navbar-brand col-md-3 col-lg-2 py-2">
                <div class="brand  d-flex justify-content-between align-items-center flex-column ">

                    <div class="img" style="border-radius:50%;overflow:hidden;max-width: 150px;">
                        <img style="width:100%;" src="./assets/images/santacruz.png" alt="">
                    </div>
                </div>
            </div>



            <div class="user d-flex justify-content-center">

                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Admin
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z" />
                    </svg>

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <div class="signout">
                        <a href="http://localhost/barangay/auth/logout.php?logout=truee">
                            <button>
                                Sign out
                            </button>
                        </a>

                    </div>
                </ul>
            </div>

            <div class="d-flex justify-content-end px-2" style="position:absolute;top:10px;left:10px;overflow:hidden;">

            </div>

            <div class="search  my-2 px-2 d-flex justify-content-center flex-wrap">
                <input type="text" placeholder="search.." style="border-radius:20px;height:40px;outline:none"
                    class="mx-1 search_input" onkeyup="searchOnChange()">

                <div class=" search_results shadow w-100">
                    <ul id="search_result_container">
                        <h6 class="px-4 py-2" style="background:#1E90FF;color:white"> Search results...</h6>
                        <li class="search_list px-4">Demography</li>
                        <li class="search_list px-4">Education</li>
                        <li class="search_list px-4">Health</li>
                    </ul>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-end "> <button class="py-1 px-2"
                    style="background:#FF5733 ;color:white;">Go to
                    chart</button></div> -->

            <br>
        </div>

        <?php

      if($_SERVER["REQUEST_URI"] === "/barangay/dashboard.php" ){    ?>

        <div id="forms_selection" class="py-3">

            <a href="/barangay/demography.php" target="_self" style="">
                <button class="py-2 px-3 shadow m-auto mb-3 d-flex align-items-center w-75"
                    onclick="navSelection('barangay')"
                    style="background:#4169E1;color:white;position:relative ;border-radius:50px" type="button">

                    <div class="img shadow"
                        style="max-width:50px;position:absolute;transform:translateY(-80%);transform:translate(-80%,-10px);;border-radius:50%">
                        <img src="./assets/images/barangay.png" alt="">
                    </div>
                    <h6 class=" m-0" style="padding:8px 0 8px 30px;font-weight:400"> BARANGAY FORM</h6>
                </button>
            </a>
            <a href="/barangay/school/primary.php" target="_self">
                <button class="py-2 px-3 shadow m-auto mb-3 d-flex align-items-center w-75"
                    onclick="navSelection('school')"
                    style="background:#4169E1;color:white;position:relative ;border-radius:50px" type="button">

                    <div class="img shadow"
                        style="max-width:50px;position:absolute;transform:translateY(-80%);transform:translate(-80%,-10px);border-radius:50%">
                        <img src="./assets/images/school.png" style="max-width:50px" alt="">

                    </div>

                    <h6 class=" m-0" style="padding:8px 0 8px 30px;font-weight:400">SCHOOL FORM </h6>
                </button>
            </a>
            <a href="/barangay/demography.php" target="_self">
                <button class="py-2 px-3 shadow m-auto d-flex align-items-center w-75"
                    onclick="navSelection('department')"
                    style="background:#4169E1;color:white;position:relative ;border-radius:50px" type="button">

                    <div class="img shadow"
                        style="max-width:50px;position:absolute;transform:translateY(-80%);transform:translate(-80%,-10px);">
                        <img src="./assets/images/department.png" style="max-width:50px" alt="">

                    </div>

                    <h6 class=" m-0" style="padding:8px 0 8px 30px;font-weight:400">DEPARTMENT FORM</h6>
                </button>
            </a>
        </div>

        <?php  }?>

        <div id="sidebar_navigations">

            <!-- brangay form navigation starts -->

            <?php if((isset($_COOKIE["nav_selection"]) && $_COOKIE["nav_selection"] === "barangay") ){ ?>
            <div class="barangay_form">
                <h5 class="py-2 text-center" style="border-top:1px solid black;border-bottom:1px solid black">BARANGAY
                    FORM</h5>

                <div class="nav flex-column mt-3">
                    <div class="accordion" id="accordionExample">
                        <!-- Demography start -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    style="background:black;color:white" aria-controls="collapseOne">
                                    <div class="img" style="max-width:50px;">
                                        <img src="./assets/images/social_development.png" alt="">

                                    </div>

                                    SOCIAL <br> DEVELOPMENT
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                        fill="#fff" clip-rule="evenodd">
                                        <path
                                            d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <ul>
                                    <a href="http://localhost/barangay/demography.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Demography
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/education.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Education
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/health.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Health
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/social_welfare_senior_citizen.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Social Welffare - Senior Citizens
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/gender_based_violence.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Gender-Based Violence
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/media_and_film.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Media and Film
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/social_protection.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Social Protection
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        <!-- Demography ends -->

                        <div class="accordion-item shadow">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                    style="background:black;color:white" aria-controls="collapseTwo">
                                    <div class="img" style="max-width:50px;">
                                        <img src="./assets/images/economic_development.png" alt="">

                                    </div>
                                    ECONOMIC <br> DEVELOPMENT
                                    <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                            fill-rule="evenodd" clip-rule="evenodd" fill="#fff">
                                            <path
                                                d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <ul>
                                    <a href="http://localhost/barangay/income_and_poverty.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Income and Poverty
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/labor_and_employment.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Labor and Employment
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/fishery.php"
                                        style="color: white;text-decoration:none;">

                                        <li>
                                            Fishery
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/forestry.php"
                                        style="color: white;text-decoration:none;">

                                        <li>
                                            Forestry
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/industry.php"
                                        style="color: white;text-decoration:none;">

                                        <li>
                                            Industry
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        <!-- Education start -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                    style="background:black;color:white" aria-controls="collapseThree">
                                    <div class="img" style="max-width:50px;">
                                        <img src="./assets/images/environmental_development.png" alt="">

                                    </div>
                                    ENVIRONMENTAL
                                    <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                            fill-rule="evenodd" clip-rule="evenodd" fill="#fff">
                                            <path
                                                d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <ul>
                                    <a href="http://localhost/barangay/resources_base_and_land_use.php"
                                        style="color: white;text-decoration:none;">

                                        <li>
                                            Resources Base and Land Use
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/tenure_management.php"
                                        style="color: white;text-decoration:none;">

                                        <li>
                                            Tenure and Management
                                        </li>
                                    </a>
                                    <a href="http://localhost/barangay/land_use_and_land_productivity.php"
                                        style="color: white;text-decoration:none;">
                                        <li>
                                            Land Use and Land Productivity
                                        </li>
                                    </a>



                            </div>
                        </div>


                    </div>
                    <div>


                    </div>
                    <?php   }?>
                    <!-- brangay form navigation end -->


                    <!--  school form navigation start-->

                    <?php if((isset($_COOKIE["nav_selection"]) && $_COOKIE["nav_selection"] === "school") ){ ?>
                    <div class="school_form_navigation">
                        <button>
                            PRIMARY
                        </button>

                        <button>
                            SECONDARY
                        </button>
                        <button>
                            THIRTIARY
                        </button>
                    </div>
                    <?php   }?>

                    <!--  school form navigation ends-->


                </div>
            </div>





</nav>