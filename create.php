<?php
require_once 'components/db_connect.php';

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
    
    $sql = "INSERT INTO `media`(`image`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES ('$pic','$isbn','$sdescription','$type','$firstname','$lastname','$name','$padress','$pdate')";
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
        body {
            margin: 0;
            padding: 0;
        }

        .background-container {
            background-image: url("https://cdn.pixabay.com/photo/2014/10/16/09/15/lens-490806_1280.jpg");
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .center-text {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php require_once 'components/navbar.php' ?>
    <div class="background-container">
        <div class="container p-4">
            <form action="" method="post">
                <div class="row">
                    <h1 class="center-text">Add your own file</h1> <!-- Apply centering and bold styles -->
                    <div class="col-md-6 offset-md-3 text-center">
                        <input type="text" name="author_first_name" placeholder="Write Author's first name" class="form-control mb-3">
                        <input type="text" name="author_last_name" placeholder="Write Author's last name" class="form-control mb-3">
                        <input type="text" name="publisher_name" placeholder="Write a Name" class="form-control mb-3">
                        <input type="text" name="isbn_code" placeholder="Enter the ISBN Code" class="form-control mb-3">
                        <input type="text" name="image" placeholder="Add a picture URL" class="form-control mb-3">
                        <input type="text" name="publish_date" placeholder="Add the publishing Date (0000-00-00)" class="form-control mb-3">
                        <input type="text" name="publisher_address" placeholder="Add the publish Country" class="form-control mb-3">
                        <input type="text" name="short_description" placeholder="Add a description" class="form-control mb-3">

                        <select name="type" class="form-control mb-3">
                            <option value="DVD">DVD</option>
                            <option value="book">Book</option>
                            <option value="CD">CD</option>
                        </select>

                        <input type="submit" name="submit" value="Create" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
