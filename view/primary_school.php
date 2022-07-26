<?php  
require("../middleware/checklogin.php");
?>
<?php  require("../process/school/retrieve.php");

$primaryresults = $dbconnection->query("SELECT * FROM primary_education");

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary School </title>
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
        <h2 style="font-weight:500;text-align:center" class="text-center">PRIMARY EDUCATION </h2>

        <br>
        <div style="max-width:1000px;margin:auto;display:flex;justify-content:space-between;flex-wrap">
            <div style="display:flex;">
                <h4 style="padding:0 10px 0 0">School Name: </h4>
                <span><?php  echo  isset($primary_row) ?  $primary_row["schoolName"] : "";  ?></span>
            </div>

            <div style="display:flex">
                <h4 style="padding:0 10px 0 0">School Year:</h4>
                <span><?php  echo  isset($primary_row) ?  $primary_row["schoolYear"] : "";  ?></span>
            </div>


        </div>
        <br>




        <section>
            <h4 style="padding:10px">Ratio of girls to boys in primary education</h4>
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
                        <p class="box"><?php  echo  isset($primary_row) ?  $primary_row["m1"] : 0;  ?></p>
                    </div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($primary_row) ?  $primary_row["f1"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box">
                            <?php  echo  isset($primary_row) ?  $primary_row["m1"] + $primary_row["f1"]  : 0;  ?></p>
                    </div>
                </div>
            </div>
        </section>

        <br>

        <section>
            <h4 style="padding:10px">Elementary School Completion Rate by Sex</h4>
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
                        <p class="box"><?php  echo  isset($primary_row) ?  $primary_row["m2"] : 0;  ?></p>
                    </div>

                    <div class="col">
                        <p class="box"><?php  echo  isset($primary_row) ?  $primary_row["f2"] : 0;  ?></p>
                    </div>
                    <div class="col">
                        <p class="box">
                            <?php  echo  isset($primary_row) ?  $primary_row["m2"] + $primary_row["f2"]  : 0;  ?></p>
                    </div>
                </div>
            </div>
        </section>




    </div>
    <button id="print" class="print">print</button>
    <a href="/barangay/school/primary.php">
        <button class="back">back</button>
    </a>
</body>
<script>
document.getElementById("print").addEventListener("click", () => {
    window.print()
})
</script>

</html>