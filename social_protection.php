<?php  

require("./middleware/checklogin.php");
require("database/connection.php");




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
    <title>Media and Film</title>
</head>



<body>

    <style>
    * {
        padding: 0;
        margin: 0;
    }

    .header {
        background: white;
        z-index: 1000;
    }

    table {
        /* border: 1px solid black; */
    }



    table tr th {
        padding: 7px 15px;
        border-left: 1px solid black;
        border-top: 1px solid black;
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

    table tr td button {
        width: 100%;
        height: 100%;
        background: black;
        color: white;
        padding: 5px 10px;
    }

    .print button {
        color: white;
        background: black;

    }

    .accordion-item {
        border: none;
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

    .record_btn {
        position: relative;
    }

    .record_btn .count {
        position: absolute;
        top: 0;
        left: 0;
        width: 25px;
        height: 25px;
        transform: translate(-15px, -15px);
        border-radius: 50px;
        background: rgb(255, 62, 143);
    }
    </style>


    <?php

$show_edit_population_by_age_input = false;

if(isset($_GET["edit_population_by_age"])){
    
}
if(isset($_POST["create_population_by_age"])){

    $ages= $_POST["ages"];
    $male= $_POST["male"];
    $female= $_POST["female"];


    $success =null;


    $sql = "INSERT INTO soc_dev_demography_age_sex (ages, male, female)
VALUES ( $ages,  $male,  $male')";

    if($dbconnection->query(  $sql)){
 $success="added";
 exit();
    }else{

    }



    
}



?>

    <div class="container-fluid">
        <?php

?>
        <div class="row">

            <?php

if(isset($_COOKIE["popup_modal"])){
    if($_COOKIE["popup_modal"]==="saverecord")
require("./modal/success.php");

}


?>

            <?php
require("./layoutsidebar/sidebar.php");

?>


            <div class="powered">
                <img src="./assets/images/gad.png" alt="">
            </div>

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

            <form action="social_protection.php" method="POST" class="container-fluid p-0 w-100  px-3 col ">


                <div>
                    <div class="header position-sticky top-0 shadow">
                        <div class="title text-center  py-2" style="background:black;color:white;">
                            <h4 class="m-0 py-3 page_title">SOCIAL DEVELOPMENT SECTOR / SOCIAL PROTECTION</h5>
                        </div>
                        <?php require("./layout/soc_dev_header.php"); ?>


                    </div>


                    <div class="row mt-3 " id="parent_accordion">
                        <div class="accordion" id="social_protection">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button d-flex justify-content-between shadow" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#sexindex" aria-expanded="false"
                                        aria-controls="sexindex">
                                        <h6 class="p-0"> Senior citizens and indigents who have availed of insurance
                                            programs (total senior citizens and registered ) (MCW-IRR Sec. 30 D )</h6>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                            </svg></span>
                                    </button>

                                </h2>
                                <div id="sexindex" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#social_protection">


                                    <table class="w-75 m-auto mb-3 my-3  p-4 " id="printcontent">

                                        <tr>

                                            <th>Male</th>
                                            <th>Female</th>
                                        </tr>
                                        <tr>

                                            <td> <input type="text" name="m45" id=""
                                                    onkeypress="return onlyNumberKey(event)"
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["m45"] : 0;  ?>" />
                                            </td>
                                            <td> <input type="text" name="f45" id=""
                                                    onkeypress="return onlyNumberKey(event)"
                                                    value="<?php  echo  isset($rowresult) ?  $rowresult["f45"] : 0;  ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <br />
                    </div>
                    <?php  require("./layout/soc_dev_footer.php");  ?>





            </form>


        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script src="./script/script.js"></script>




</body>

</html>