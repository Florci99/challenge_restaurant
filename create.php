<?php 

require_once "db_connect.php";
require_once "file_upload.php";

if(isset($_POST['create'])) {
    $name= $_POST["name"];
    $price= $_POST["price"];
    $img= fileUpload($_FILES["img"]);
    $description = $_POST["description"];

    $sql = "INSERT INTO `dishes` (`img`, `name`,`price`, `description`) VALUES ('{$img[0]}','$name', '$price', '$description')";
    $result = mysqli_query($connect, $sql);

    if($result) {
        echo "<div class='alert alert-success' role='alert'>
            New dish has been created!
            </div>";
        header("refresh: 3; url= index.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>
            Something went wrong!
            </div>";
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create dish</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
   <div class="container mt-5">
       <h2>Create a new dish</h2>
       <form method="POST" enctype="multipart/form-data">
           <div class="mb-3 mt-3">
               <label for="name" class="form-label">Name</label>
               <input type="text" class="form-control" id="name" aria-describedby="name" name="name" required>
           </div>
           <div class="mb-3">
               <label for="price" class="form-label">Price</label>
               <input type="text" class="form-control" id="price" aria-describedby="price" name="price" required>
           </div>
           <div class="mb-3">
               <label for="description" class="form-label">Description</label>
               <input type="text" class="form-control" id="description" aria-describedby="description" name="description">
           </div>
           <div class="mb-3">
               <label for="img" class="form-label">Picture</label>
               <input type="file" class="form-control" id="img" aria-describedby="img" name="img">
           </div>
           <button name="create" type="submit" class="btn btn-primary">Create dish</button>
           <a href="index.php" class="btn btn-warning">Back to all dishes</a>
       </form>
   </div>
 
</body>
</html>