<?php
$host ="localhost";
$user = "root";
$pass = "";
$dbName = "be20_cr4_christian_elger_biglibrary";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if(!$conn){
    die(" ohoh connection failed.");
}