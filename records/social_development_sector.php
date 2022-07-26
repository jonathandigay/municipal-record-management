<?php  

require("../middleware/checklogin.php");
require("../database/connection.php");
require("../process/delete_soc_dev.php");
require("../process/update_soc_dev.php");
require("../process/view_soc_dev_record.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/main.css">
    <link rel="icon" href="../assets/images/santacruz.png">
    <title>Social development records</title>
</head>



<body>

    <style>
    * {
        padding: 0;
        margin: 0;
    }

    tr {
        /* border-bottom: 3px solid black; */
    }

    a {
        text-decoration: none;
    }


    button:hover {
        transform: translateY(-2px);
        opacity: .8;
        transition: all ease-in 300ms;
    }

    button::after {
        display: none;
    }

    .header {
        background: white;
        z-index: 1000;
    }


    .print button {
        color: white;
        background: black;

    }

    .accordion-item {
        background: rgb(165, 165, 165);
    }

    .print button:hover {
        opacity: .8;

    }

    .print button svg {
        fill: white;
    }

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
    </style>







    <div class="container-fluid position-relative">
        <div class="row">
            <?php
require("../layoutsidebar/sidebar.php");

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



            <div class="container-fluid p-0 py-3 px-3 col ">
                <div class="header position-sticky top-0 shadow">
                    <div class="title text-center  py-2" style="background:black;color:white;">
                        <h5 class="m-0 py-3 page_title">Social Development Records</h5>
                    </div>
                    <div class=" d-flex my-2 align-items-center  ">

                        <div class="d-flex justify-content-end">

                            <a href="http://localhost/barangay/demography.php">
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
                        </div>





                    </div>
                    <div class="d-flex align-items-center justify-content-start mx-2 my-2">
                        <div class="d-flex align-items-center ">

                            <h6 class="m-0 mx-1">YEAR:</h6>
                            <div>
                                <select class="form-select" aria-label="Default select example"
                                    name="year_session_records" onchange="yearSessionRecords(this)">
                                    <?php 
                                if(isset($_COOKIE["year_session_records"])){  ?>
                                    <option hidden style="background:#fe4895 !important;color:white;"
                                        value='<?php  echo $_COOKIE["year_session_records"]  ?>'>
                                        <?php  echo $_COOKIE["year_session_records"]  ?></option>
                                    <?php  } ?>
                                    <option value="2021-2022">2021-2022</option>
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2017-2018">2017-2018</option>
                                </select>
                            </div>

                        </div>

                        <div class="d-flex align-items-center m-1">

                            <h6 class="m-0 mx-1">BARANGAY:</h6>
                            <div>
                                <select class="form-select " aria-label="Default select example" name="barangay"
                                    onchange="barangaySessionRecords(this)">


                                    <?php 
                                if(isset($_COOKIE["barangay_session_records"])){  ?>
                                    <option hidden style="background:#fe4895 !important;color:white;"
                                        value='<?php  echo $_COOKIE["barangay_session_records"]  ?>'>
                                        <?php  echo $_COOKIE["barangay_session_records"]  ?></option>
                                    <?php  } ?>


                                    <?php
                                    require("../arrays/barangay.php");
                                       $count =count($barangay);
                                       $i =0;
                                       for($i; $i < $count; $i++){
                                       ?>
                                    <option value=<?php echo $barangay[$i]   ?>><?php echo $barangay[$i]   ?>
                                    </option>

                                    <?php  };?>
                                </select>
                            </div>

                        </div>
                    </div>

                    <br>
                </div>
                <table class="w-75 m-auto mb-3 my-3 p-4 " id="printcontent">



                    <div class="powered">
                        <img src="../assets/images/gad.png" alt="">
                    </div>









                    <?php
$rowresult=null;

$results = $dbconnection->query("SELECT * FROM social_development");
if(isset($_COOKIE["year_session_records"]) && isset($_COOKIE["barangay_session_records"])){

 if($results->num_rows > 0){
    
    while($dbrow =$results->fetch_assoc() ){  
        if(strcmp($dbrow["year"], $_COOKIE["year_session_records"])===0  && strcmp($dbrow["barangay"], $_COOKIE["barangay_session_records"])===0 ){  ?>


                    <tr class="d-flex justify-content-between align-items-center py-3 px-3 shadow">
                        <td class="d-flex align-items-center">
                            <h6 class="m-0"> <?php  echo $dbrow["barangay"]  ?> </h6>
                        </td>

                        <td class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="dots_dropdown d-flex align-items-center p-1 justify-content-center"
                                    style="cursor:pointer;">

                                    <span style="pointer-events:none"><svg width="24" height="24"
                                            xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path
                                                d="M14 19h-14v-1h14v1zm9.247-8.609l-3.247 4.049-3.263-4.062-.737.622 4 5 4-5-.753-.609zm-9.247 2.609h-14v-1h14v1zm0-6h-14v-1h14v1z" />
                                        </svg></span>
                                    <div class="drop_down shadow ">
                                        <a
                                            href="/barangay/process/view_soc_dev_record.php?barangay=<?php echo $dbrow["barangay"] ?>&year=<?php echo $dbrow["year"] ?>">
                                            <button class="py-2 px-3 mb-1" style="background:#32CD32;color:white;">
                                                view</button>
                                        </a>

                                        <a
                                            href="/barangay/process/update_soc_dev.php?barangay=<?php echo $dbrow["barangay"] ?>&year=<?php echo $dbrow["year"] ?>">
                                            <button class="py-2 px-3 mb-1"
                                                style="background:#1E90FF;color:white;">edit</button></a>
                                        <a href="social_development_sector.php?id=<?php  echo $dbrow["id"]?>">
                                            <button class="py-2 px-3 mb-1"
                                                style="background:#DC143C;color:white;">delete</button></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>



                    <?php
                    }}
                }
} ?>




                </table>
            </div>


        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../script/script.js "></script>
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


    <script>
    function yearSessionRecords(e) {

        document.cookie = `year_session_records = ${e.value} ; expires=Thu, 18 Dec 3000 12:00:00 UTC`;
        window.location.reload();
    }

    function barangaySessionRecords(e) {

        document.cookie = `barangay_session_records = ${e.value} ; expires=Thu, 18 Dec 3000 12:00:00 UTC`;
        window.location.reload();
    }
    </script>

</body>

</html>