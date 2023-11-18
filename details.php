<?php
require_once 'components/db_connect.php';

$sql = "SELECT * FROM `media` WHERE Id = $_GET[prodID]";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$card = "";

          $card .= "
          
          <h5 class='card-title'>$row[publisher_name]</h5>
              <img src='$row[image]' class='img-fluid' style='height: 25rem' alt=''>
              <div class='border border-top-5 '>
                  <p class='card-text'>Author: $row[author_first_name]$row[author_last_name]</p>
                  <hr>
                  <p class='card-text'>Publish Date: $row[publish_date]</p>
                  <hr>
                  <p class='card-text'>Country: $row[publisher_address]</p>
                  <hr>
                  <p class='card-text'>About: $row[short_description]</p>
                  <hr>
                  <p class='card-text'>This is a $row[type]</p>
                  <hr>
                  <p class='card-text'>ISBN: $row[isbn_code]</p>
                  <hr>
                  <a href='update.php?prodID=$row[id]' class='btn btn-warning'>Update</a>
                  <a href='delete.php?prodID=$row[id]' class='btn btn-danger'>Delete</a>
                  <a href='publisher.php?publisher_address=$row[publisher_address]' class='btn btn-outline-secondary'>Publisher</a>
              </div>
    
        ";
        mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .background-container {
            background-image: url("https://cdn.pixabay.com/photo/2015/12/09/17/12/popcorn-1085072_1280.jpg");
            background-size: cover;
            height: 100vh;
            display: flex;
        }
        </style>
  </head>
<body>
  <?php require_once 'components/navbar.php' ?>
  <div class="background-container">
<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 p-4">
            <?= $card; ?>
        </div>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>