<?php
require_once 'components/db_connect.php';

if (isset($_GET['publisher_address'])) {
    $publisher_address = $_GET['publisher_address'];

    $sql = "SELECT * FROM `media` WHERE `publisher_address` = '$publisher_address'";
    $result = mysqli_query($conn, $sql);
    $cards = "";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $cards .= "
            <div class='p-4'>
            <div class='card w-175'>
            
              <img src='$row[image]' class='card-img-top' style='height: 12rem' alt=''>
              <div class='card-body'>
                <h5 class='card-title'>$row[publisher_name]</h5>
                <hr>
                <p class='card-text'> $row[author_first_name]$row[author_last_name]</p>
                <p class='card-text'> $row[type]</p>
                <p class='card-text'>$row[publish_date]</p>
              </div>
          
              <div class='card-footer text-center'>
                <div class='d-grid gap-2'>
                    <a href='details.php?prodID=$row[id]' class='btn btn-outline-primary'>Details</a>
                    <a href='update.php?prodID=$row[id]' class='btn btn-outline-warning'>Update</a>
                    <a href='delete.php?prodID=$row[id]' class='btn btn-outline-dark'>Delete</a>
                </div>
              </div>
            </div>
          </div>
            ";
        }
    } else {
        $cards = "ohh, no data found for the selected publisher.";
    }

    mysqli_close($conn);
} else {

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'components/navbar.php' ?>

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            <?= $cards; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
