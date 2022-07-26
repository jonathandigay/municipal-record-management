<?php  
require("../middleware/checklogin.php");
require("../database/connection.php");
?>
<?php  require("../process/retrieve_soc_developement.php"); ?>
<?php  require("../process/soc_development_sector.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>

<style>
* {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;

    font-size: 11px;
    box-sizing: border-box;
}


body {
    background: black;
}

.main {
    background: white;
    padding: 10px 40px;
    max-width: 800px;
    margin: auto
}

h4,
h3,
h5,
p {
    margin: 0;
}


.box {
    border: 1px solid black;
    margin: 0 5px;
}

.row {
    display: flex;
    justify-content: center;
    width: 100%;
}

.row {
    /* border-bottom: 1px solid black; */
    padding: 5px 10px
}



.col {
    text-align: center;
}

.col:nth-child(1) {
    text-align: left;
}


.row .col:nth-child(1) {
    flex: 1;

}

.row .col:nth-child(2),
.row .col:nth-child(3),
.row .col:nth-child(1) {
    width: 100px;

}

.row_pair_table {
    width: 50%;

    text-align: left;
}



.row_pair {
    display: flex;
}



.row_pair .col:nth-child(2),
.row_pair .col:nth-child(3),
    {
    width: 100px;
    text-align: center;
}

.table {
    /* border: 1px solid black; */
    overflow: hidden;
    /* margin: 10px; */
    padding: 0 10px;
    margin: 5px;
    border: 1px solid black;

}

.table .row:nth-child(even) {}

.table1 {
    display: flex;
    justify-content: space-evenly;
}

.table1 .table {
    width: 100%;
}

.footer {
    display: flex;
    justify-content: space-evenly;
}

.back {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px 20px;
    border: none;
    background: #1E90FF;
    color: white;
    cursor: pointer;
}

.print {
    position: absolute;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    border: none;
    background: #1E90FF;
    color: white;
    cursor: pointer;
}
</style>

<body>


    <div class="main">


        <div class="header" style="display:flex;justify-content:center;align-items:center;">
            <div style="margin:5px">
                <img src="../assets/images/santacruz.png" alt="" style="max-width:80px;">

            </div>
            <div style="display:flex;flex-direction:column;justify-content-center">
                <h4 style="text-align:center;font-weight:300">Republic of the Phhilippines</h4>
                <h3 style="text-align:center;font-weight:500">MUNICIPALITY OF SANTA CRUZ</h3>
                <h4 style="text-align:center;font-weight:300">Province of Marinduque</h4>

            </div>

        </div>
        <br>
        <br>
        <div style="max-width:1000px;margin:auto;display:flex;justify-content:space-between">
            <div style="display:flex;">
                <h4 style="padding:0 10px 0 0">Barangay: </h4><span><?php  echo  isset($rowresult) ?  $rowresult["barangay"] : 0;  ?> Santa Cruz Marinduque</span>
            </div>

            <div style="display:flex">
                <h4 style="padding:0 10px 0 0">Year:</h4> <span><?php  echo  isset($rowresult) ?  $rowresult["year"] : 0;  ?></span>
            </div>
        </div>
        <br>



        <h3 style="font-weight:500">1. SOCIAL DEVELOPMENT SECTOR</h3>


        <section>
            <h4 style="padding:10px">1.A DEMOGRAPHY</h4>
            <h4 style="padding:10px">Total Household Population by Age Group , by Sex(psa.gov.ph)</h4>

            <div class="table1">
                <div class="table ">
                    <div class="row table_head">
                        <div class="col">
                            <h5>Ages</h5>
                        </div>
                        <div class="col">

                            <h5>Male</h5>
                        </div>
                        <div class="col">
                            <h5>Female</h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">1-4</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m1"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f1"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">5-9</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m2"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f2"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">10 - 14</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m3"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f3"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">15 - 19 </div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m4"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f4"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">20 - 24</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m5"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f5"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">25 - 29</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m6"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f6"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">30 - 34</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m7"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f7"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">35 - 39</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m8"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f8"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">40 - 44</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m9"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f9"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">45 - 49</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m10"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f10"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">50 - 54</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m11"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f11"] : 0;  ?></p>
                        </div>
                    </div>


                </div>

                <div class="table">
                    <div class="row table_head">
                        <div class="col">
                            <h5>Ages</h5>
                        </div>
                        <div class="col">

                            <h5>Male</h5>
                        </div>
                        <div class="col">
                            <h5>Female</h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">55 - 59</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m12"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f12"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">60 - 64</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m13"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f13"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">65 - 69</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m14"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f14"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">70 - 74</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m15"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f15"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">75 - 79</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m16"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f16"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">80 - 84</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m17"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f17"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">85 - 89</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m18"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f18"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">90 - 95</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m19"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f19"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">96-100</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m20"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f20"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">101 and over</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m21"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f21"] : 0;  ?></p>
                        </div>

                    </div>
                    <div class="row">
                        <div class=" col">
                            <h3>All ages</h3>
                        </div>

                        <div class="col">
                            <h3><?php  echo  isset($rowresult) ?  
                            $rowresult["m1"] + 
                            $rowresult["m2"] +
                            $rowresult["m3"] +
                            $rowresult["m4"] +
                            $rowresult["m5"] +
                            $rowresult["m6"] +
                            $rowresult["m7"] +
                            $rowresult["m8"] +
                            $rowresult["m9"] +
                            $rowresult["m10"] +
                            $rowresult["m11"] +
                            $rowresult["m12"] +
                            $rowresult["m13"] +
                            $rowresult["m14"] +
                            $rowresult["m15"] +
                            $rowresult["m16"] +
                            $rowresult["m17"] +
                            $rowresult["m18"] +
                            $rowresult["m19"] +
                            $rowresult["m20"] +
                            $rowresult["m21"] 
                            : 0;  ?></h3>
                        </div>
                        <div class="col">
                            <h3><?php  echo  isset($rowresult) ?
                            $rowresult["f1"] + 
                            $rowresult["f2"] +
                            $rowresult["f3"] +
                            $rowresult["f4"] +
                            $rowresult["f5"] +
                            $rowresult["f6"] +
                            $rowresult["f7"] +
                            $rowresult["f8"] +
                            $rowresult["f9"] +
                            $rowresult["f10"] +
                            $rowresult["f11"] +
                            $rowresult["f12"] +
                            $rowresult["f13"] +
                            $rowresult["f14"] +
                            $rowresult["f15"] +
                            $rowresult["f16"] +
                            $rowresult["f17"] +
                            $rowresult["f18"] +
                            $rowresult["f19"] +
                            $rowresult["f20"] +
                            $rowresult["f21"] : 0;  ?></h3>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <br>


        <section>
            <h4 style="padding:10px">Sex ratio</h4>
            <div class="row_pair_table table">
                <div class=" row_pair row table_head" style="display:flex;">
                    <div class="col" style="text-align:center;">
                        <h5>Male</h5>
                    </div>
                    <div class="col">

                        <h5>Female</h5>
                    </div>
                    <div class="col">
                        <h5>Total</h5>
                    </div>

                </div>
                <div class="row_pair row">
                    <div class="col" style="text-align:center;">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m22"] : 0;  ?></p>
                    </div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f22"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box">0</p>
                    </div>
                </div>
            </div>
        </section>

        <br>

        <section>
            <h4 style="padding:10px"> Total population by Martial status , Sex Dissaggregate
                (www.nscb.gov.ph)</h4>
            <div class="table ">
                <div class="row table_head">
                    <div class="col">
                        <h5>Status</h5>
                    </div>
                    <div class="col">

                        <h5>Male</h5>
                    </div>
                    <div class="col">
                        <h5>Female</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col">Single</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m23"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f23"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Maried - Active</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m24"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f24"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Maried Seperated</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m25"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f25"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Divorced</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m26"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f26"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Live-in Arrangement - Active</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m27"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f27"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Live-n Arrangement - Sepearated</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m28"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f28"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Widowed</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m29"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f29"] : 0;  ?></p>
                    </div>
                </div>

            </div>

        </section>


        <br>


        <section style="display:flex;align-items:center;">
            <h4>Average household size</h4>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num1"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>


        <section>
            <h4 style="padding:10px"> Percentage of Male/Female Household by Civil Status
                (www.nscb.gov.ph)</h4>
            <div class="table ">
                <div class="row table_head">
                    <div class="col">
                        <h5>Status</h5>
                    </div>
                    <div class="col">

                        <h5>Male</h5>
                    </div>
                    <div class="col">
                        <h5>Female</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col">Single</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m30"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f30"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Maried - Active</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m31"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f31"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Maried Seperated</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m32"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f32"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Divorced</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m33"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f33"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Live-in Arrangement - Active</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m34"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f34"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Live-n Arrangement - Sepearated</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m35"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f35"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Widowed</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m36"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f36"] : 0;  ?></p>
                    </div>
                </div>

            </div>

        </section>


        <br>

        <h4 style="padding:10px">1.B EDUCATION</h4>
        <section>
            <h4 style="padding:10px"> Percentage of Popuation 6-24 years old by level currently
                attending by Age, Group and by Sex</h4>
            <div class="table ">
                <div class="row table_head">
                    <div class="col">
                        <h5>Status</h5>
                    </div>
                    <div class="col">

                        <h5>Male</h5>
                    </div>
                    <div class="col">
                        <h5>Female</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col">Not currently attending</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m37"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f37"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Attending </div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m38"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f38"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Kinder/Prep?Nursery</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m39"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f39"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Elementary</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m40"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f40"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Highschool</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m41"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f41"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Post Secondary</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m42"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f42"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">College</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m43"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f43"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Post-graduate</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m44"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f44"] : 0;  ?></p>
                    </div>
                </div>

            </div>

        </section>


        <br>
        <h4 style="padding:10px">1.B HEALTH</h4>

        <section style="display:flex;align-items:center;">
            <p>Number of cases teenage pregnancy</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num2"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>

        <section style="display:flex;align-items:center;">
            <p>Percentage of household with access to family planning</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num3"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>

        <section style="display:flex;align-items:center;">
            <p>Percentage of population covered by Philhealth and other health
                financing schemes (PDP-2011-2016)</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num4"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>


        <section style="display:flex;align-items:center;">
            <p>Percentage of households with source/access to safe drinking
                water (PDP 2011-2016)</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num5"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>

        <section style="display:flex;align-items:center;">
            <p>Percentage of households of household without sanitary
                toilets,latest</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num6"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Presence of barangay health center</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol1"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Presence of garbage disposal sysytem</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol2"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <h2>Availability of the following services for women</h2>
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Councilling services for women</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol3"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Pap smear</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol4"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Breast cancer ( including mamogram )</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol5"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Availability of public comfort rooms</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol6"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Presence of well-maintained health center with private rooms for
                physical exam/counselling</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol7"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p> Number of women who reported equal/full access of women to
                comprehensive , quality and affordable health services (including and
                treatment of diseases; sexual reproductive health services ) , latest </p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num7"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p> Percentage of population that accessed secondary and tertirary health services by sex</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num8"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p> Number of women who accessed quality maternal and post-patrium care and services from health facilities
                and qualified health personnel</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num9"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p> Persentage of women who reported to have equal decision on the number of years between pregancies over
                number of women interviewed , lates</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num10"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Number of adolescents who reported attendance to orientation of
                the prevention to early pregnancies and STDS, lates</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num11"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Proportion of households who are informal settlers by sex</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num12"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Proportion of household with dwelling structures unable to
                protect them from the elenents</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num13"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <h4 style="padding:10px">1.C SOCIAL WELFARE SENIOR CITIZEN</h4>

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p> Number of senior citizens provided support services (MCW_IRR
                Sec 36-A) </p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["num14"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;flex-wrap:wrap">
            <p> Number and types support services to senior citizens (MCW-IRR
                Sec. 36 A)
            </p>
            <br>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["text1"] : "";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <h4 style="padding:10px">1.E GENDER BASED VIOLENCE</h4>

        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Functional VAW desks (MCW_IRR Sec. 12 D)</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol8"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->
        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Presence of women's desk in police stations</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol9"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Presence of adequate lightning in streets public places to defer crime</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol10"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Presence of VAW referral sysytem</p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["bol11"] : "No";  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;flex-wrap:wrap">
            <p>Availability of local facilities of officies support services as counciling, temporary shelter and child
                care for VAW victims, (lastest available at 2 years) </p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                    <?php  echo  isset($rowresult) ?  $rowresult["text2"] : "";  ?></p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <h4 style="padding:10px">1.G MEDIA AND FILM</h4>

        <!--  -->


        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Number of cases of teenage pregnancy </p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num15"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <h4 style="padding:10px">1.H SOCIAL PROTECTION</h4>

        <!--  -->


        <br>
        <!--  -->

        <section>
            <p>Senior citizens and indigents who have availed of insurance programs (total senior citizens and
                registered) (MCW-IRR Sec. 30 D) </p>
            <div class="row_pair_table table">
                <div class=" row_pair row table_head" style="display:flex;">
                    <div class="col" style="text-align:center;">
                        <h5>Male</h5>
                    </div>
                    <div class="col">

                        <h5>Female</h5>
                    </div>
                    <div class="col">
                        <h5>Total</h5>
                    </div>

                </div>
                <div class="row_pair row">
                    <div class="col" style="text-align:center;">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m45"] : 0;  ?></p>
                    </div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f45"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box">0</p>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <h4 style="padding:10px">1.I INCOME AND POVERTY</h4>

        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Proportion of household whose eat less than 3 full meals a days </p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num16"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->

        <!--  -->
        <section style="display:flex;align-items:center;">
            <p>Percentage of households with one main source of income only to total number of households </p>
            <div class="col" style="text-align:center;">
                <p class="box" style="padding:5px 20px;"><?php  echo  isset($rowresult) ?  $rowresult["num17"] : 0;  ?>
                </p>
            </div>
        </section>

        <br>
        <!--  -->


        <br>
        <!--  -->

        <!--  -->
        <h4 style="padding:10px">1.H LABOR AND EMPLOYMENT</h4>

        <!--  -->



        <br>
        <!--  -->

        <section>
            <p> Percent of labor force employed of household head by sex, and by age</p>
            <div class="table">
                <div class="row table_head">
                    <div class="col">
                        <h5>Ages</h5>
                    </div>
                    <div class="col">

                        <h5>Male</h5>
                    </div>
                    <div class="col">
                        <h5>Female</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col">15 - 19</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m46"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f46"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">20 - 24</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m47"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f47"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">25 - 29</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m48"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f48"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">30 - 34</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m49"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f49"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">35 - 39</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m50"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f50"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">40 - 44</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m51"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f51"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">45 - 49</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m52"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f52"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">50 - 54</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m53"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f53"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">55 - 59</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m54"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f54"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">60 - 65</div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m55"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f55"] : 0;  ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">All ages</div>

                    <div class="col">
                        <p class="" style="border:none"><?php  echo  isset($rowresult) ? 
                         $rowresult["m46"] +
                         $rowresult["m47"] +
                         $rowresult["m48"] +
                         $rowresult["m49"] +
                         $rowresult["m50"] +
                         $rowresult["m51"] +
                         $rowresult["m52"] +
                         $rowresult["m53"] +
                         $rowresult["m54"] +
                         $rowresult["m55"] 
                         : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="" style="border:none"><?php  echo  isset($rowresult) ? 
                         $rowresult["f46"] +
                         $rowresult["f47"] +
                         $rowresult["f48"] +
                         $rowresult["f49"] +
                         $rowresult["f50"] +
                         $rowresult["f51"] +
                         $rowresult["f52"] +
                         $rowresult["f53"] +
                         $rowresult["f54"] +
                         $rowresult["f55"] 
                          : 0;  ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <p> Average family income of household head , by sex (CORE GAD)</p>
            <div class="row_pair_table table">
                <div class=" row_pair row table_head" style="display:flex;">
                    <div class="col" style="text-align:center;">
                        <h5>Male</h5>
                    </div>
                    <div class="col">

                        <h5>Female</h5>
                    </div>
                    <div class="col">
                        <h5>Total</h5>
                    </div>

                </div>
                <div class="row_pair row">
                    <div class="col" style="text-align:center;">
                        <p class="box">0</p>
                    </div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m56"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f56"] : 0;  ?></p>
                    </div>
                </div>
            </div>
        </section>


        <br>
        <!--  -->

        <section>


            <br>
            <!--  -->

            <section>
                <p> Average time spent doing houshold chores by eemploymed and women (CORE GAD)</p>
                <div class="row_pair_table table">
                    <div class=" row_pair row table_head" style="display:flex;">
                        <div class="col" style="text-align:center;">
                            <h5>Male</h5>
                        </div>
                        <div class="col">

                            <h5>Female</h5>
                        </div>
                        <div class="col">
                            <h5>Total</h5>
                        </div>

                    </div>
                    <div class="row_pair row">
                        <div class="col" style="text-align:center;">
                            <p class="box">0</p>
                        </div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m57"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f57"] : 0;  ?></p>
                        </div>
                    </div>
                </div>
            </section>


            <br>
            <!--  -->


            <br>
            <!--  -->

            <section>
                <p>Proportion of 15 years old who are not working but actively seeking work by sex</p>
                <div class="row_pair_table table">
                    <div class=" row_pair row table_head" style="display:flex;">
                        <div class="col" style="text-align:center;">
                            <h5>Male</h5>
                        </div>
                        <div class="col">

                            <h5>Female</h5>
                        </div>
                        <div class="col">
                            <h5>Total</h5>
                        </div>

                    </div>
                    <div class="row_pair row">
                        <div class="col" style="text-align:center;">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m58"] : 0;  ?></p>
                        </div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f58"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box">0</p>
                        </div>
                    </div>
                </div>
            </section>

            <br>
            <!--  -->

            <section>
                <p> Proportion of children below 15 years old and above who are employed to the total members of
                    employed persons person by sex</p>
                <div class="row_pair_table table">
                    <div class=" row_pair row table_head" style="display:flex;">
                        <div class="col" style="text-align:center;">
                            <h5>Male</h5>
                        </div>
                        <div class="col">

                            <h5>Female</h5>
                        </div>
                        <div class="col">
                            <h5>Total</h5>
                        </div>
                    </div>
                    <div class="row_pair row">
                        <div class="col" style="text-align:center;">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m59"] : 0;  ?></p>
                        </div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f59"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box">0</p>
                        </div>
                    </div>
                </div>
            </section>


            <br>
            <!--  -->
            <h4 style="padding:10px">1.I FISHERY</h4>

            <!--  -->


            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p> Women who are functionning as fish wardens deputized (within 6 months from IRR) (MCW-IRR Sec. 23 B
                    8.a)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text3"] : null;  ?></p>
                </div>
            </section>

            <!--  -->

            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p>Women recognized as effective fish wardens (MCW-IRR Sec B. 8.b)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text4"] : null;  ?></p>
                </div>
            </section>

            <!--  -->
            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p>Capacity Development training for women fish wardens (MCW-IRR Sec. B. 8.c)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text5"] : null;  ?></p>
                </div>
            </section>

            <!--  -->

            <!--  -->
            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p> Social and legal protetction for all deputized women fish wardens (MCW-IRR Sec. 23 B. 8.d)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text6"] : null;  ?></p>
                </div>
            </section>




            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!--  -->
            <br>
            <!--  -->
            <h4 style="padding:10px">1.J FORESTRY</h4>

            <!--  -->


            <!--  -->
            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p> Women who are participated in the management of protected areas (MCW-IRR Sec. 23 B 5.a)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text7"] : null;  ?></p>
                </div>
            </section>

            <!--  -->
            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p>Marine and terrestrial protected areas managed by women (MCW-IRR Sec. 23 B 5)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text8"] : null;  ?></p>
                </div>
            </section>

            <br>
            <!--  -->
            <section style="display:flex;align-items:center;flex-wrap:wrap">
                <p>Community managed ecotourism projects participated in by women stakeholders (MCW-IRR Sec. 23 B 5.b)
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text9"] : null;  ?></p>
                </div>
            </section>

            <!--  -->
            <br>
            <!--  -->
            <h4 style="padding:10px">1.k INDUSTRY</h4>

            <!--  -->

            <br>
            <!--  -->
            <section style="display:flex;flex-direction:column;flex-wrap:wrap">
                <p>Credits programs accessible to women
                </p>
                <br>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["text10"] : null;  ?></p>
                </div>
            </section>

            <br>
            <!--  -->

            <!--  -->
            <section style="display:flex;align-items:center;">
                <p>Number of women who own business enterprises</p>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["num18"] : 0;  ?></p>
                </div>
            </section>

            <br>
            <!--  -->

            <!--  -->
            <section style="display:flex;align-items:center;">
                <p>Increased number of women in viable microenterprises</p>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["num19"] : 0;  ?></p>
                </div>
            </section>

            <br>
            <!--  -->

            <!--  -->
            <section style="display:flex;align-items:center;">
                <p>Average monthly income of women in microenterprises</p>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["num20"] : 0;  ?></p>
                </div>
            </section>

            <!--  -->
            <br>
            <!--  -->
            <h4 style="padding:10px">1.L RESOURCES BASE AND LAND USE</h4>

            <!--  -->



            <br>
            <!--  -->

            <!--  -->
            <section style="display:flex;align-items:center;">
                <p>Number of women who have participated in the management of protected areas (MCW-IRR Sec.23, B. 5a)
                </p>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["num21"] : 0;  ?></p>
                </div>
            </section>


            <br>
            <!--  -->

            <!--  -->
            <section style="display:flex;align-items:center;">
                <p>Number of marine and terrestrial protected areas (PAs managed by women (MCW-IRR Sec. 23 B 5a)</p>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["num22"] : 0;  ?></p>
                </div>
            </section>

            <br>
            <!--  -->

            <!--  -->
            <section style="display:flex;align-items:center;">
                <p>Number of community-manged ecotourism projects participated in by women stakeholders (MCW-IRR Sec. 23
                    B 4b)</p>
                <div class="col" style="text-align:center;">
                    <p class="box" style="padding:5px 20px;">
                        <?php  echo  isset($rowresult) ?  $rowresult["num23"] : 0;  ?></p>
                </div>
            </section>

            <br>
            <!--  -->

            <section>
                <p> Ratio of population to certified AD areas (in persons/hectare), sex-disaggregated</p>
                <div class="row_pair_table table">
                    <div class=" row_pair row table_head" style="display:flex;">
                        <div class="col" style="text-align:center;">
                            <h5>Male</h5>
                        </div>
                        <div class="col">

                            <h5>Female</h5>
                        </div>
                        <div class="col">
                            <h5>Total</h5>
                        </div>

                    </div>
                    <div class="row_pair row">
                        <div class="col" style="text-align:center;">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m60"] : 0;  ?></p>
                        </div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f60"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box">
                                <?php  echo  isset($rowresult) ?  $rowresult["f60"] + $rowresult["m60"] : 0;  ?></p>
                        </div>
                    </div>
                </div>
            </section>


            <br>
            <!--  -->

            <section>
                <p> Percentage of respondents who are aware of their rights to ancestral domainand lands , by sex</p>
                <div class="table">
                    <div class="row table_head">
                        <div class="col">
                            <h5>Subject</h5>
                        </div>
                        <div class="col">

                            <h5>Male</h5>
                        </div>
                        <div class="col">
                            <h5>Female</h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">Right of ownership</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m61"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f61"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Right in case of displacement</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m62"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f62"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Right to regulate entry of migrates</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m63"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f63"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Right to develop lands and natural resources</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m64"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f64"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Right to safe and clean water</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m65"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f65"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Right to claim parts of reservations</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m66"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f66"] : 0;  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Right to resolve conflict</div>

                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m67"] : 0;  ?></p>
                        </div>
                        <div class="col">
                            <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f67"] : 0;  ?></p>
                        </div>
                    </div>

                </div>
            </section>

            <section>


                <br>
                <!--  -->

                <section>
                    <p> Percentage of respondents who experienced violations of rightd to ancestral domains and land ,
                        by sex</p>
                    <div class="table">
                        <div class="row table_head">
                            <div class="col">
                                <h5>Subject</h5>
                            </div>
                            <div class="col">

                                <h5>Male</h5>
                            </div>
                            <div class="col">
                                <h5>Female</h5>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">Not expirienced violations</div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m68"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f68"] : 0;  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">Expirince violations</div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m69"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f69"] : 0;  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">Encroachment </div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m70"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f70"] : 0;  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">Pollution</div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m71"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f71"] : 0;  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">Illegal entry</div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m72"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f72"] : 0;  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">Displacement</div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m73"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f73"] : 0;  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">others</div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m74"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f74"] : 0;  ?></p>
                            </div>
                        </div>

                    </div>
                </section>

                <!--  -->
                <br>
                <!--  -->
                <h4 style="padding:10px">1.M TENURE MANAGEMENT</h4>

                <!--  -->


                <br>
                <!--  -->

                <!--  -->
                <section style="display:flex;align-items:center;flex-wrap:wrap">
                    <p>Comprehensive development and management plans industrial forest management agreemnents (IFMA)
                        integrated with gender concerns (MCW Sec. 23 B3c)</p>

                    <br>
                    <div class="col" style="text-align:center;">
                        <p class="box" style="padding:5px 20px;width:400px;min-height:100px;margin:5px;">
                            <?php  echo  isset($rowresult) ?  $rowresult["mtext11"] : null;  ?></p>
                    </div>
                </section>

                <br>
                <!--  -->

                <!--  -->
                <section style="display:flex;align-items:center;">
                    <p>Number of women beneficiares of community based management programs (CBFM)</p>
                    <div class="col" style="text-align:center;">
                        <p class="box" style="padding:5px 20px;">
                            <?php  echo  isset($rowresult) ?  $rowresult["num24"] : 0;  ?></p>
                    </div>
                </section>

                <br>
                <!--  -->

                <section>
                    <p> Area covered by teases and permits per lesse by sex</p>
                    <div class="row_pair_table table">
                        <div class=" row_pair row table_head" style="display:flex;">
                            <div class="col" style="text-align:center;">
                                <h5>Male</h5>
                            </div>
                            <div class="col">

                                <h5>Female</h5>
                            </div>
                            <div class="col">
                                <h5>Total</h5>
                            </div>

                        </div>
                        <div class="row_pair row">
                            <div class="col" style="text-align:center;">
                                <p class="box">0</p>
                            </div>

                            <div class="col">
                                <p class="box"> <?php  echo  isset($rowresult) ?  $rowresult["m75"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box"> <?php  echo  isset($rowresult) ?  $rowresult["f75"] : 0;  ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <!--  -->
                <br>
                <!--  -->
                <h4 style="padding:10px">1.N LAND USE AND LAND PRODUCTIVITY</h4>

                <!--  -->

                <br>
                <!--  -->

                <section>
                    <p> Number of women and men who paricipated in the development of land use plans and implementations
                        of zoing ordinance (MCW Sec. 24 A.8)</p>
                    <div class="row_pair_table table">
                        <div class=" row_pair row table_head" style="display:flex;">
                            <div class="col" style="text-align:center;">
                                <h5>Male</h5>
                            </div>
                            <div class="col">

                                <h5>Female</h5>
                            </div>
                            <div class="col">
                                <h5>Total</h5>
                            </div>

                        </div>
                        <div class="row_pair row">
                            <div class="col" style="text-align:center;">
                                <p class="box"> <?php  echo  isset($rowresult) ?  $rowresult["m76"] : 0;  ?></p>
                            </div>

                            <div class="col">
                                <p class="box"> <?php  echo  isset($rowresult) ?  $rowresult["f76"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box">0</p>
                            </div>
                        </div>
                    </div>
                </section>

                <br>
                <!--  -->

                <!--  -->
                <section style="display:flex;align-items:center;">
                    <p>Increased number of beneficialries with secured land tenure in agriculture and residental lands
                        (by sex of beneficiary) (conversations, Protections and rehabilitaion of environmental and
                        natural resources ; results matrices , 2011-2016</p>
                    <div class="col" style="text-align:center;">
                        <p class="box" style="padding:5px 20px;">
                            <?php  echo  isset($rowresult) ?  $rowresult["num25"] : 0;  ?></p>
                    </div>
                </section>

                <br>
                <!--  -->

                <br>
                <!--  -->

                <section>
                    <p> Cropland per agricultural worker by sex</p>
                    <div class="row_pair_table table">
                        <div class=" row_pair row table_head" style="display:flex;">
                            <div class="col" style="text-align:center;">
                                <h5>Male</h5>
                            </div>
                            <div class="col">

                                <h5>Female</h5>
                            </div>
                            <div class="col">
                                <h5>Total</h5>
                            </div>

                        </div>
                        <div class="row_pair row">
                            <div class="col" style="text-align:center;">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m77"] : 0;  ?></p>
                            </div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f77"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box">
                                    <?php  echo  isset($rowresult) ?  $rowresult["m77"] + $rowresult["f77"] : 0;  ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <br>
                <!--  -->

                <section>
                    <p> Agricultural workers , by sex per tractor</p>
                    <div class="row_pair_table table">
                        <div class=" row_pair row table_head" style="display:flex;">
                            <div class="col" style="text-align:center;">
                                <h5>Male</h5>
                            </div>
                            <div class="col">

                                <h5>Female</h5>
                            </div>
                            <div class="col">
                                <h5>Total</h5>
                            </div>

                        </div>
                        <div class="row_pair row">
                            <div class="col" style="text-align:center;">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m78"] : 0;  ?></p>
                            </div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f78"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box">
                                    <?php  echo  isset($rowresult) ?  $rowresult["m78"] + $rowresult["f78"] : 0;  ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <br>
                <!--  -->

                <section>
                    <p> Percentage of total land area occupied by squatters</p>
                    <div class="row_pair_table table">
                        <div class=" row_pair row table_head" style="display:flex;">
                            <div class="col" style="text-align:center;">
                                <h5>Male</h5>
                            </div>
                            <div class="col">

                                <h5>Female</h5>
                            </div>
                            <div class="col">
                                <h5>Total</h5>
                            </div>

                        </div>
                        <div class="row_pair row">
                            <div class="col" style="text-align:center;">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["m79"] : 0;  ?></p>
                            </div>

                            <div class="col">
                                <p class="box"><?php  echo  isset($rowresult) ?  $rowresult["f79"] : 0;  ?></p>
                            </div>
                            <div class="col">
                                <p class="box">
                                    <?php  echo  isset($rowresult) ?  $rowresult["f79"] + $rowresult["m79"] : 0;  ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <br>
                <br>


                <div class="footer">

                    <div>
                        <p>PREPARED BY: <?php  echo  isset($rowresult) ?  $rowresult["preparedby"] : 0;  ?></p>
                    </div>


                    <div>
                        <p>REVIEWED BY: <?php  echo  isset($rowresult) ?  $rowresult["reviewedby"] : 0;  ?></p>
                    </div>
                </div>


                <br>
                <br>


    </div>
    <button id="print" class="print">print</button>
    <a href="/barangay/records/social_development_sector.php">
        <button class="back">back</button>
    </a>
</body>


<script>
document.getElementById("print").addEventListener("click", () => {
    window.print()
})
</script>

</html>