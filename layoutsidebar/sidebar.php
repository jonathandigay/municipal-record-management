<nav id="sidebarMenu" class="col-md-3 col-lg-3  show shadow  bg-light sidebar collapse border-3 px-2">



    <div class="sidebar-sticky ">

        <div class=" sidebar-brand ">
            <div class=" navbar-brand col-md-3 col-lg-2 py-2">
                <div class="brand  d-flex justify-content-between align-items-center flex-column ">

                    <div class="img" style="border-radius:50%;overflow:hidden;max-width: 150px;">
                        <img style="width:100%;" src="./assets/images/santacruz.png" alt="">
                    </div>

                </div>

                <?php   if($_SERVER["REQUEST_URI"] !== "/barangay/dashboard.php" ){    ?>
                <div class="back_dashboard_btn my-1 px-3 py-2">
                    <a href="/barangay/dashboard.php">
                        <button class="py-1 px-3 shadow"> <span><svg width="24" height="24"
                                    xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"
                                    fill="#fff">
                                    <path
                                        d="M2.117 12l7.527 6.235-.644.765-9-7.521 9-7.479.645.764-7.529 6.236h21.884v1h-21.883z" />
                                </svg></span> Back to dashboard</button></a>
                </div>

                <?php  }?>
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
                <input type="text" placeholder="search.." style="border-radius:10px;height:40px;outline:none"
                    class="mx-1 search_input" onkeyup="searchOnChange()">

                <div class=" search_results shadow w-100">
                    <ul id="search_result_container">
                        <h6 class="px-4 py-2" style="background:#1E90FF;color:white"> Search results...</h6>
                        <a href="/barangay/demography.php">
                            <li class="search_list px-3 py-2">Demography</li>
                        </a>
                        <a href="/barangay/education.php">
                            <li class="search_list px-3 py-2">Education</li>
                        </a>
                        <a href="/barangay/fishery.php">
                            <li class="search_list px-3 py-2">Fishery</li>
                        </a>
                        <a href="/barangay/forestry.php">
                            <li class="search_list px-3 py-2">Forestry</li>
                        </a>
                        <a href="/barangay/gender_based_violence.php">
                            <li class="search_list px-3 py-2">Gender based violence</li>
                        </a>
                        <a href="/barangay/health.php">
                            <li class="search_list px-3 py-2">Health</li>
                        </a>
                        <a href="/barangay/infustry.php">
                            <li class="search_list px-3 py-2">Industry</li>
                        </a>
                        <a href="/barangay/labor_and_employment.php">
                            <li class="search_list px-3 py-2">Labor and employment</li>
                        </a>
                        <a href="/barangay/land_use_and_land_productivity.php">
                            <li class="search_list px-3 py-2">Land use and land productivity</li>
                        </a>
                        <a href="/barangay/media_and_film.php">
                            <li class="search_list px-3 py-2">Media and Film</li>
                        </a>
                        <a href="/barangay/resources_base_and_land_use.php">
                            <li class="search_list px-3 py-2">Resources base and land use</li>
                        </a>
                        <a href="/barangay/social_protection.php">
                            <li class="search_list px-3 py-2">Social protection</li>
                        </a>
                        <a href="/barangay/tenure_management.php">
                            <li class="search_list px-3 py-2">Tenure management</li>
                        </a>
                        <a href="/barangay/social_welfare_senior_citizen.php">
                            <li class="search_list px-3 py-2">Social welfare senior citizen</li>
                        </a>
                        <a href="/barangay/school/primary.php">
                            <li class="search_list px-3 py-2">Primary education</li>
                        </a>
                        <a href="/barangay//school/tertiary.php">
                            <li class="search_list px-3 py-2">Tertiary education</li>
                        </a>
                        <a href="/barangay/school/secondary.php.php">
                            <li class="search_list px-3 py-2">Secondary education</li>
                        </a>
                        </a>
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
            <h5 class="py-2 text-center" style="border-top:1px solid black;border-bottom:1px solid black">DASHBOARD</h5>
            <br>
            <a href="/barangay/demography.php" target="_self" style="">
                <button class="py-2 px-3 shadow m-auto mb-3 d-flex align-items-center " style="width:80%; "
                    onclick="navSelection('barangay')" style="position:relative ; " type="button">

                    <div class="img shadow"
                        style="max-width:50px;position:absolute;transform:translate(-30px,-10px);border-radius:50px;">
                        <img src="./assets/images/barangay.png" alt="">
                    </div>
                    <h6 class=" m-0" style="padding:8px 0 8px 30px;font-weight:400"> BARANGAY FORM</h6>
                </button>
            </a>
            <a href="/barangay/school/primary.php" target="_self">
                <button class="py-2 px-3 shadow m-auto mb-3 d-flex align-items-center " style="width:80%;"
                    onclick="navSelection('school')" style="position:relative ; " type="button">

                    <div class="img shadow"
                        style="max-width:50px;position:absolute;transform:translate(-30px,-10px);border-radius:50px;">
                        <img src="./assets/images/school.png" style="max-width:50px" alt="">

                    </div>

                    <h6 class=" m-0" style="padding:8px 0 8px 30px;font-weight:400">SCHOOL FORM </h6>
                </button>
            </a>
            <a href="/barangay/demography.php" target="_self">
                <button class="py-2 px-3 shadow m-auto d-flex align-items-center " style="width:80%;"
                    onclick="navSelection('department')" style="position:relative ; " type="button">

                    <div class="img shadow"
                        style="max-width:50px;position:absolute;transform:translate(-30px,-10px);border-radius:50px;">
                        <img src="./assets/images/department.png" style="max-width:50px" alt="">

                    </div>

                    <h6 class=" m-0" style="padding:8px 0 8px 30px;font-weight:400">DEPARTMENT FORM</h6>
                </button>
            </a>
        </div>

        <?php  }?>

        <div id="sidebar_navigations">

            <!-- brangay form navigation starts -->

            <?php if($_SERVER["REQUEST_URI"] === "/barangay/demography.php" OR
             $_SERVER["REQUEST_URI"] === "/barangay/education.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/fishery.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/forestry.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/gender_based_violence.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/health.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/income_and_poverty.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/industry.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/labor_and_employment.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/land_use_and_land_productivity.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/media_and_film.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/resources_base_and_land_use.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/social_protection.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/social_welfare_senior_citizen.php" OR 
             $_SERVER["REQUEST_URI"] === "/barangay/tenure_management.php" 
             ){ ?>
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

                    <?php if(
                    $_SERVER["REQUEST_URI"] === "/barangay/school/primary.php" OR 
                    $_SERVER["REQUEST_URI"] === "/barangay/school/secondary.php" OR 
                    $_SERVER["REQUEST_URI"] === "/barangay/school/tertiary.php" ){
                    ?>

                    <h5 class="py-2 text-center" style="border-top:1px solid black;border-bottom:1px solid black">
                        SCHOOL
                        FORM</h5>
                    <div class="school_form_navigation nav_selection active">
                        <a href="/barangay/school/primary.php">
                            <button
                                class="py-3 mb-3 shadow w-100 <?php echo $_SERVER["REQUEST_URI"] === "/barangay/school/primary.php"  ? 'active' :null  ?> ">

                                PRIMARY
                            </button>
                        </a>
                        <a href="/barangay/school/secondary.php">

                            <button
                                class="py-3 mb-3 shadow w-100 <?php echo $_SERVER["REQUEST_URI"] === "/barangay/school/secondary.php" ? 'active' : null  ?>">
                                SECONDARY
                            </button>
                        </a>
                        <a href="/barangay/school/tertiary.php">

                            <button
                                class="py-3 mb-3 shadow w-100 <?php echo $_SERVER["REQUEST_URI"] === "/barangay/school/tertiary.php" ? 'active' :null   ?>">
                                TERTIARY
                            </button>
                        </a>

                    </div>
                    <?php   }?>

                    <!--  school form navigation ends-->


                </div>
            </div>





</nav>