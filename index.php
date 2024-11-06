<!-- We will create a Restaurant Database (you can create it directly in php
MyAdmin).
The database should contain one table called dishes with columns dishID,
image (URL link), name, price and meal description. If there are any
columns that you think could compliment your project feel free to expand.
You should be able to:
● Display all meals. This page will show name, image and a "Show
details" link for all meals in the database.
● Each meal will be linked to a details page specific for that meal (try to
pass the id using GET request). From that id, show all the details to
the specific meal included on your database. -->


<?php
    require_once  "db_connect.php";

   $sql = "SELECT * FROM dishes" ;

   $result = mysqli_query($connect, $sql);

   $cards = "" ;

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
           $cards .= "<div>
                        <div class='card' style='width: 18rem;'>
                            <img src='./resources/{$row["img"]}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$row["name"]}</h5>
                                <a href='dish_details.php?id={$row["id"]}' class='btn btn-primary'>See details</a>
                            </div>
                        </div>
                    </div>" ;
       }
   } else  {
       $cards = "<p>No results found</p>" ;
   }

   
//    var_dump( $GLOBALS );

   mysqli_close($connect);
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"   content="width=device-width, initial-scale=1">
        <title > Restaurant </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    
    
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Dishes</a>
                    <a class="nav-link" href="#">Events</a>
                    <a class="nav-link" href="#">Reservation</a>
                    <a class="nav-link disabled" aria-disabled="true">Contact</a>
                </div>
            </div>
        </div>
    </nav>
 ^

 <div class="container">

   <!-- Cards displaying the dishes -->
    <div class="container mt-5">
        <h1>Our Dishes</h1>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
            <?= $cards ?>
        </div>
    </div> 

</div>

    <script   src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"   integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"   crossorigin = "anonymous" ></script>
    </body>
</html>