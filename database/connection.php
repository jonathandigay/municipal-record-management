  <?php

define("server","localhost");
define("username","mydbuser");
define("password","1234");
define("dbname","barangay");

// Create connection
$dbconnection = mysqli_connect(server, username, password,dbname);

if($dbconnection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>