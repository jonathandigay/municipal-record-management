    <div class=" d-flex my-2 align-items-center justify-content-between flex-wrap">

        <div class="d-flex my-2 align-items-center ">
            <div class=" d-flex align-items-center mx-2">
                <h6 style="background:black;color:white;width:max-content;clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);font-size:15px;"
                    class="m-0 mx-1 px-5 py-3">BARANGAY:
                </h6>

                <select class="form-select " aria-label="Default select example" name="barangay"
                    onchange="barangaySession(this)">


                    <?php 
                                if(isset($_COOKIE["barangay"])){  ?>
                    <option hidden style="background:#fe4895 !important;color:white;"
                        value='<?php  echo $_COOKIE["barangay"]  ?>'>
                        <?php  echo $_COOKIE["barangay"]  ?></option>
                    <?php  } ?>


                    <?php
                                    require("./arrays/barangay.php");
                                       $count =count($barangay);
                                       $i =0;
                                       for($i; $i < $count; $i++){
                                       ?>
                    <option value=<?php echo $barangay[$i]   ?>><?php echo $barangay[$i]   ?>
                    </option>

                    <?php  };?>
                </select>

            </div>
            <div class="d-flex align-items-center mx-2">
                <h6 style="background:black;color:white;width:max-content;clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);font-size:15px;"
                    class="m-0 mx-1 px-5 py-3">YEAR:</h6>
                <select class="form-select  " aria-label="Default select example" name="year"
                    onchange="yearSession(this)">
                    <?php 
                                if(isset($_COOKIE["year"])){  ?>
                    <option hidden style="background:#fe4895 !important;color:white;"
                        value='<?php  echo $_COOKIE["year"]  ?>'>
                        <?php  echo $_COOKIE["year"]  ?></option>
                    <?php  } ?>
                    <br>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2019-2020">2019-2020</option>
                    <option value="2017-2018">2017-2018</option>
                </select>
            </div>
        </div>

        <div class="print d-flex justify-content-end m-3 ">
            <!-- <a href="../barangay/dashboard.php" id="view_chart_btn">
                <button style="background:rgb(255,62,143);color:white;" class="py-2 px-3 m-2 shadow " type="button"
                    onclick="navSelection('dashboard')">
                    Dashboard <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                        fill="#fff" clip-rule="evenodd">
                        <path
                            d="M0 22h1v-5h4v5h2v-10h4v10h2v-15h4v15h2v-21h4v21h1v1h-24v-1zm4-4h-2v4h2v-4zm6-5h-2v9h2v-9zm6-5h-2v14h2v-14zm6-6h-2v20h2v-20z" />
                    </svg></button></a> -->
            <a href="./records/social_development_sector.php" target="_self">
                <button class="py-2 px-3 shadow m-2 record_btn" style="background:#4169E1;" id="print" type="button">
                    <?php

$results = $dbconnection->query("SELECT * FROM social_development");

if(isset($results)){    ?>


                    <div class="count"> <?php   echo $results->num_rows;  ?> </div>


                    <?php
}

?>
                    <p>view records <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M7.972 2h-6.972l.714 5h2.021l-.429-3h3.694c1.112 1.388 1.952 2 4.277 2h9.283l-.2 1h2.04l.6-3h-11.723c-1.978 0-2.041-.417-3.305-2zm16.028 7h-24l2 13h20l2-13z" />
                        </svg></p>
                </button>
            </a>
            <button class="py-2 px-3 m-2 shadow" style="background:#1E90FF;" name="demography" type="submit">
                <p>Save <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M14 3h2.997v5h-2.997v-5zm9 1v20h-22v-24h17.997l4.003 4zm-17 5h12v-7h-12v7zm14 4h-16v9h16v-9z" />
                    </svg>
            </button>

        </div>

    </div>