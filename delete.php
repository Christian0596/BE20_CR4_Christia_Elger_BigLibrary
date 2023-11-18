<?php
require_once 'components/db_connect.php';

if(isset($_GET["prodID"]) && !empty($_GET["prodID"])){
    $id = $_GET["prodID"];

    $sql = "DELETE FROM `media` WHERE id = $id";
    mysqli_query($conn, $sql);
}
mysqli_close($conn);
header("Location: index.php");