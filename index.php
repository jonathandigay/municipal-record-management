<?php
header('/auth/login.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<style>
.home {

    min-height: 100vh;
    width: 100%;
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}

.home .header {
    display: flex;
    justify-content: center;
    min-height: 60px
}

.home .header .navbar-toggler {
    top: 0.25rem;
    right: 1rem;
    box-shadow: none !important;
}

.home .header .user button:focus {
    box-shadow: none !important;
    border: none !important;
}

.home .header .user ul li {
    text-align: center;
}

.home .header .user ul a {
    color: black;
    text-decoration: none;
}

.home .header .user ul p {
    margin: 0;
}

.home .header .user ul p:hover {
    background: black;
    color: white;
}

.home .hero {
    height: 100%;
    min-height: calc(100vh - 88px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>

<body>
    <div class="home">
        <div class="header">
            <div class="user p-4" style="background:white">

                <button class="btn dropdown-toggle  shadow" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z" />
                    </svg>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a href="./auth/login.php"> <a href="./auth/login.php">
                            <p class="type px-2 py-2" style="cursor:pointer"> log in</p>
                        </a>
                        <a href="./auth/signup.php">
                            <p class="type px-2 py-2" style="cursor:pointer">Create acount</p>
                        </a>

                </ul>
            </div>
        </div>
        <div class="hero">
            <div class="img">
                <img src="./assets/images/santacruz.png" alt="">
            </div>
            <h1>
                GENDER AND DEVELOPMENT
            </h1>
        </div>
    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>