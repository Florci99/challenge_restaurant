<?php 
    require_once "db_connect.php";

    $sql = "SELECT * FROM dishes" ;

    $result = mysqli_query($connect, $sql);

    $cards = "" ;

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $uniqueId = 'collapse' . $row['id'];

            $cards .= "<li class='list-group-item d-flex justify-content-between align-items-start'>
            <div class='ms-2 me-auto'>
                <div class='fw-bold'>{$row['name']}</div>
                Price: {$row['price']}
            </div>
            <div class='accordion' id='accordionExample{$row['id']}'>
                <div class='accordion-item'>
                    <h2 class='accordion-header'>
                        <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#{$uniqueId}' aria-expanded='true' aria-controls='{$uniqueId}'>
                        Update Dish
                        </button>
                    </h2>
                    <div id='{$uniqueId}' class='accordion-collapse collapse' data-bs-parent='#accordionExample{$row['id']}'>
                        <div class='accordion-body'>
                            <form method='POST' enctype='multipart/form-data'>
                                <div class='mb-3 mt-3'>
                                    <label for='name' class='form-label'>Name</label>
                                    <input type='text' class='form-control' id='name' aria-describedby='name' name='name' value='{$row['name']}' required>
                                </div>
                                <div class='mb-3'>
                                    <label for='price' class='form-label'>Price</label>
                                    <input type='text' class='form-control' id='price' aria-describedby='price' name='price' value='{$row['price']}' required>
                                </div>
                                <div class='mb-3'>
                                    <label for='description' class='form-label'>Description</label>
                                    <input type='text' class='form-control' id='description' aria-describedby='description' name='description' value='{$row['description']}'>
                                </div>
                                <div class='mb-3'>
                                    <label for='img' class='form-label'>Picture</label>
                                    <input type='file' class='form-control' id='img' aria-describedby='img' name='img'>
                                </div>
                                <button name='update' type='submit' class='btn btn-primary'>Update dish</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>";
       }
   } else  {
       $cards = "<p>No results found</p>" ;
   }

   mysqli_close($connect);

   ?>
   
   <!DOCTYPE html>
   <html lang="en">
   
       <head>
           <meta charset="utf-8">
           <meta name="viewport"   content="width=device-width, initial-scale=1">
           <title > Update dish </title>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       </head>
   <body>
   <div class="container mt-5">
       
       <ol class="list-group list-group-numbered">
           <?= $cards ?>
       </ol>
   
       <a type="button" class="btn btn-secondary" href="index.php">Back</a>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
   </html>
