 <div class="header position-sticky top-0 shadow">
     <div class="title text-center  py-2" style="background:black;color:white;">
         <h5 class="m-0">Social Development Sector</h5>
     </div>
     <div class=" d-flex my-2 align-items-center justify-content-between ">

         <div class="d-flex my-2 align-items-center ">
             <div class=" d-flex align-items-center mx-2">
                 <h6 class="m-0 mx-1">BARANGAY:</h6>
                 <select class="form-select" aria-label="Default select example" name="barangay" name="barangay"
                     onchange="barangaySession(this)">

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
                 <h6 class="m-0 mx-1">YEAR:</h6>
                 <select class="form-select" aria-label="Default select example" name="year">
                     <option selected value="2020-2022">2020-2622</option>
                     <option value="2018-2019">2018-2019</option>
                     <option value="2017-2018">2017-2018</option>
                     <option value="2016-2017">2016-2017</option>

                 </select>
             </div>
         </div>

         <div class="print d-flex justify-content-end m-3 ">
             <a href="./records/social_development_sector.php" target="_self">
                 <button class="py-2 px-3 shadow m-2" id="print" type="button">
                     <p> records <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                             <path
                                 d="M7.972 2h-6.972l.714 5h2.021l-.429-3h3.694c1.112 1.388 1.952 2 4.277 2h9.283l-.2 1h2.04l.6-3h-11.723c-1.978 0-2.041-.417-3.305-2zm16.028 7h-24l2 13h20l2-13z" />
                         </svg></p>
                 </button>
             </a>
             <button class="py-2 px-3 m-2 shadow" name="demography" type="submit">
                 <p>Save <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                         <path
                             d="M14 3h2.997v5h-2.997v-5zm9 1v20h-22v-24h17.997l4.003 4zm-17 5h12v-7h-12v7zm14 4h-16v9h16v-9z" />
                     </svg>
             </button>

         </div>

     </div>

 </div>