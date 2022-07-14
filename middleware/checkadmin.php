<?php
require("../database/connection.php");

$result = $dbconnection->query("SELECT * FROM admin");
$row = $result->fetch_assoc();

?>