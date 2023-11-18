<?php
require_once 'components/db_connect.php';

$sql = "SELECT *FROM `media` WHERE id = $_GET[prodID]";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $firstname = $_POST["author_first_name"];
    $lastname = $_POST["author_last_name"];
    $name = $_POST["publisher_name"];
    $isbn = $_POST["isbn_code"];
    $pic = $_POST["image"];
    $pdate = $_POST["publish_date"];
    $padress = $_POST["publisher_address"];
    $sdescription = $_POST["short_description"];
    $type = $_POST["type"];

    $sql = "UPDATE `media` SET `image`='$pic',`isbn_code`='$isbn',`short_description`='$sdescription',`type`='$type',`author_first_name`='$firstname',`author_last_name`='$lastname',`publisher_name`='$name',`publisher_address`='$padress',`publish_date`='$pdate' WHERE `id` = $_GET[prodID]";

    if(mysqli_query($conn, $sql)){
        echo"
        <div class = 'alert alert-success' role= 'alert'>
        All good, file was created !
        </div>
        ";
    }
    else{
        echo "
        <div class = 'alert alert-danger' role= 'alert'>
        Not good, file was not created !
        </div>
        ";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create</title>
    <style>
        .background-container {
            background-image: url("https://cdn.pixabay.com/photo/2014/10/16/09/15/lens-490806_1280.jpg");
            background-size: cover;
            height: 100vh;
            display: flex;
        }
        .form-control {
            height: 50px;
        }
    </style>
</head>
<body>
     <?php require_once 'components/navbar.php' ?>
     <div class="background-container">
     <div class= "container mt-5">
<form action="" method="post">

    <input type="text" name="author_first_name" placeholder="Write Author first name" class="form-control" value="<?= $row["author_first_name"]; ?>">
    <input type="text" name="author_last_name" placeholder="WriteAuthor last name" class="form-control" value="<?= $row["author_last_name"]; ?>">
    <input type="text" name="publisher_name" placeholder="Write publisher Name" class="form-control" value="<?= $row["publisher_name"]; ?>">
    <input type="text" name="isbn_code" placeholder="Enter the ISBN Code" class="form-control" value="<?= $row["isbn_code"]; ?>">
    <input type="text" name="image" placeholder="Add a picture URL" class="form-control" value="<?= $row["image"]; ?>">
    <input type="text" name="publish_date" placeholder="Add the publish Date of the Movie like: 0000-00-00" class="form-control" value="<?= $row["publish_date"]; ?>">
    <input type="text" name="publisher_address" placeholder="Add the Country" class="form-control" value="<?= $row["publisher_address"]; ?>">
    <input type="text" name="short_description" placeholder="Add a description" class="form-control" value="<?= $row["short_description"]; ?>">

    <select name="type">
        <option value="DVD" <?php $row["type"] == "DVD" ? "selected" : "" ?>>DVD</option>
        <option value="book"<?php $row["type"] == "book" ? "selected" : "" ?>>Book</option>
        <option value="CD"<?php $row["type"] == "CD" ? "selected" : "" ?>>CD</option>
    </select>
    <input type="submit" name="submit" value="Update" class="btn btn-secondary btn-lg">
      
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
