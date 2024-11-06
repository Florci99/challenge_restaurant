<?php
    require_once  "db_connect.php";
    $id = $_GET['id'];
   $sql = "SELECT * FROM dishes WHERE id = $id";

   $result = mysqli_query($connect, $sql);

   $row = mysqli_fetch_assoc($result);

   mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"   content="width=device-width, initial-scale=1">
        <title > Dish details </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
</html>

<div class="container mt-5">
    
    <div class="card">
        <h5 class="card-header"><?= $row['name']?></h5>
        <div class="card-body">
        <h5 class="card-title">$ <?= $row['price'] ?></h5>
        <p class="card-text"><?= $row['description'] ?></p>
    </div>
</div>

    <a type="button" class="btn btn-secondary" href="index.php">Back</a>
</div>
