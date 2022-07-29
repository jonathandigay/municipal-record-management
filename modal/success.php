<div class="info_main pop_up_modal">

    <div class="info box py-2 px-3 shadow show">
        <br>
        <div class="d-flex align-items-center px-2 py-3 shadow"
            style="background:#1E90FF ; color:white;border-radius:5px">
            <span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white"
                    clip-rule="evenodd">
                    <path d="M24 4.685l-16.327 17.315-7.673-9.054.761-.648 6.95 8.203 15.561-16.501.728.685z" />
                </svg> </span>
            <h6 class="px-3 m-0">You have successfully save a record</h6>
        </div>


        <br>

        <div class="action">

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
            <a href="/barangay/records/social_development_sector.php">
                <button class="shadow save_modal_exit">
                    view records
                </button>
            </a>
            <?php  }?>
            <button class="shadow save_modal_exit">exit</button>
        </div>

    </div>
</div>