<nav id="sidebarMenu" class="col-md-3 col-lg-3   d-md-block bg-light sidebar collapse border-3 px-2">

    <div class="sidebar-sticky ">

        <div class="shadow sidebar-brand ">
            <div class=" navbar-brand col-md-3 col-lg-2 py-2">
                <div class="brand  d-flex justify-content-between align-items-center flex-column ">

                    <div class="img" style="border-radius:50%;overflow:hidden;max-width: 150px;">
                        <img style="width:100%;" src="./assets/images/santacruz.png" alt="">
                    </div>
                </div>
            </div>

            <h4 class="text-start p-2">Gender and Development</h4>


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



            <div class="search">
                <input type="text" placeholder="search..">
                <button>Search</button>
            </div>
        </div>

        <div class="my-3 shadow forms">

            <div class=" d-flex justify-content-center" style="background:black;color:white;">
                <h5>Forms</h5>
            </div>
            <div class="gad_form_btns d-flex justify-content-center">
                <a href="?current_sector=barangay"><button name="barangay"
                        class="py-2 px-3 m-2 active shadow gad_form_btn" shadow>Barangay </button></a>

                <button name="school" class="py-2 px-3 m-2 shadow gad_form_btn">School </button>
                <button name="department" class="py-2 px-3 m-2 shadow gad_form_btn">Department </button>
            </div>






        </div>


        <ul class="nav flex-column mt-3">
            <div class="accordion" id="accordionExample">
                <!-- Demography start -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button d-flex justify-content-between shadow" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Social Development Sector
                            <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                    fill="#fff" clip-rule="evenodd">
                                    <path
                                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z" />
                                </svg></span>
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
                            <a href="http://localhost/barangay/health.php" style="color: white;text-decoration:none;">
                                <li>
                                    Health
                                </li>
                            </a>
                            <a href="http://localhost/barangay/social_welfare_sinior_citizen.php"
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
                            aria-controls="collapseTwo">
                            Economic Development Sector
                            <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                    fill="#fff" clip-rule="evenodd">
                                    <path
                                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z" />
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
                            <a href="http://localhost/barangay/fishery.php" style="color: white;text-decoration:none;">

                                <li>
                                    Fishery
                                </li>
                            </a>
                            <a href="http://localhost/barangay/forestry.php" style="color: white;text-decoration:none;">

                                <li>
                                    Forestry
                                </li>
                            </a>
                            <a href="http://localhost/barangay/industry.php" style="color: white;text-decoration:none;">

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
                            aria-controls="collapseThree">
                            Environmental Sector
                            <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                    fill="#fff" clip-rule="evenodd">
                                    <path
                                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z" />
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


                        </ul>
                    </div>
                </div>

                <div>
                </div>
                <!-- Education ends -->

                <!-- Environment sector start -->

                <!-- Environment sector ends -->
            </div>

    </div>
</nav>