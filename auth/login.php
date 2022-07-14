<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./layout.css">
    <title>Log in</title>
</head>



<body>
    <style>
    * {
        padding: 0;
        margin: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }


    .gad_login_main {}

    .gad_login_main .side {
        background: black;
        color: white;

        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .gad_login_main .side img {
        max-width: 400px;
        /* animation: fromtop linear 300ms 1; */

    }

    .gad_login_main .side .text {
        /* animation: frombottom linear 300ms 1; */

    }


    .gad_login_main .form {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        min-height: 100vh;

    }

    .gad_login_main .form .text {
        animation: fromtop linear 300ms 1;

    }

    .gad_login_main .side .mission {
        animation: frombottom linear 600ms 1;

    }

    .gad_login_main .side .vission {
        animation: frombottom linear 600ms 1;

    }

    .gad_login_main .form form {
        width: 60%;
        margin: auto
    }

    .gad_login_main .form .form-select {
        cursor: pointer;
        text-align: center;
        width: max-content;
        margin: auto;
    }

    .gad_login_main .form .form-select:focus {
        box-shadow: 0 0 2px 0 black;
        border: none !important
    }

    .gad_login_main .form .form-select option {
        cursor: pointer;

    }

    .gad_login_main .form .form-select option:hover {
        background: black;
        color: white;
        cursor: pointer;
    }

    .gad_login_main .form .form-group {
        width: 100%;
    }

    .gad_login_main .form .form-group input {
        width: 100%;
        height: 50px;
        padding: 0 10px;
        border: 1px solid rgba(0, 0, 0, .2);
        outline: none;
    }

    .gad_login_main .form .form-group input:focus {
        border: 1px solid rgba(0, 0, 0, 1);

    }

    .gad_login_main .form .action button {
        background: black;
        color: white;
        border: none;
        outline: none;

    }

    .gad_login_main .form .error_message {
        width: 100%;
        padding: 5px 10px;
        font-size: 14px;

        background: rgba(255, 0, 0, .2);
    }

    .gad_login_main .form .action button:hover {
        /* background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8), black); */
        transform: translateY(-2px);
        transition: all ease-in 300ms;
        box-shadow: 0 10px 5px rgba(0, 0, 0, 0.2);
        ;
    }


    @keyframes fromtop {
        0% {
            transform: translateY(-50px);
            opacity: .2;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes frombottom {
        0% {
            transform: translateY(50px);
            opacity: .2;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }
    </style>

    <?php
session_start();

require("../middleware/checkadmin.php");
$username_err =null ;
$password_err =null ;
$success =null ;
$logintype =null;
$credential_err =null;
 $inputusername =null;
    $inputpassword = null;

if(isset($_POST["login"])){

    $username = $row["username"];
    $password = $row["password"];
    $inputusername = $_POST["username"];
    $inputpassword = $_POST["password"];
    $logintype=$_POST["logintype"];

    if(empty($inputusername) ){
     $username_err ="Username is required!";
     }
    if(empty($inputpassword) ){
     $password_err  ="password is required!";
     }
     
     if(  $inputpassword === $password AND $inputusername === $username ){

        $_SESSION["user"]=$username;
header("Location: http://localhost/barangay/demography.php");
    }
    if(!empty(trim($inputusername)) && !empty(trim($inputpassword)) && $inputpassword !== $password ){
        $credential_err ="credential was wrong!";
    }
        if(!empty(trim($inputusername)) && !empty(trim($inputpassword)) && $inputusername!== $username ){
        $credential_err ="credential was wrong!";
    }
 


    




}

?>
    <?php


?>


    <div class="gad_login_main d-flex flex-column-reverse flex-md-row ">
        <div class="side px-3 col-md-4 ">

            <div class="img">
                <img src="../assets/images/santacruz.png" alt="">
            </div>
            <h1 class="text text-center">Gender and Development</h1>




            <div class="pt-4 mission">
                <h3>Mission</h3>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quod sint animi magnam nobis cum
                    nisi labore corrupti cumque similique adipisci ipsam. Officiis eos porro asperiores eaque. </p>
            </div>
            <div class="vission">
                <h3>Vission</h3>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quod sint animi magnam nobis cum
                    nisi labore corrupti cumque similique adipisci ipsam. Officiis eos porro asperiores eaque. </p>
            </div>
        </div>




        <div class="form">
            <form action="login.php" method="POST">
                <h1 class="text-center p-2 text">Log in </h1>

                <select class="form-select" aria-label="Default select example" name="logintype">
                    <option selected value="admin">Admin mode</option>
                    <option value="client">Client mode</option>

                </select>



                <div class="form-group d-flex flex-column my-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="username..." value=<?php echo  $inputusername ;?>>
                    <?php  if($username_err){
                    echo ' <div class="error_message">' . $username_err  . ' </div>';
                }  ?>
                </div>

                <div class="form-group d-flex flex-column my-3 ">
                    <label for="username">Password</label>
                    <input type="text" name="password" placeholder="password" value=<?php echo  $inputpassword ;?>>
                    <?php  if($password_err){
                    echo ' <div class="error_message">' . $password_err  . ' </div>';
                }  ?>
                </div>

                <div>
                    <input type="checkbox"> <span>Remember me</span>
                </div>
                <div class="text-end my-3">
                    <label>Need an account?</label> <span><a href="signup.php">sign up</a></span>

                </div>
                <?php  if($credential_err){
                    echo ' <div class=" my-2 error_message">' . $credential_err  . ' </div>';
                }  ?>
                <div class="action d-flex justify-content-center">
                    <button class="px-4 py-2" type="submit" name="login">Login </button>
                </div>

            </form>
        </div>


    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>