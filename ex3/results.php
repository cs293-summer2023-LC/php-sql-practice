<?php

/* 

Exercise 3: Put all neighborhoods in a select menu within a form, 
pointing to results.php. In results.php, display house images for 20 listings
from the selected neighborhood, ordered by rating descending. 

1. In src/functions.php, write a PHP function that gets
all neighborhood names and ids, sorted alphabetically by neighborhood.


2. In the select element, list each neighborhood id and name
in as <option> elements

e.g.
<option value='47'>Alameda</option>
...


3. In results.php, get the neighborhoodID using $_GET. In src/functions.php,
write a function that gives you the neighborhood name if you provide the 
neighborhood id. Call this function, and display the neighborhood name in the 
<h1> element.

4. In src/functions.php, write a function to get the pictureURl from 20
listings from the selected neighborhood, ordered by rating, descending.

5. Loop through the results, and display each image as such, in the div.row element:


<div class='col'>
    <img src='https://a0.muscache.com/pictures/20499196/76d74d5e_original.jpg' class='img-fluid' >
</div>



*/


include("src/functions.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ex 3</title>
  </head>
  <body>
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Fake Airbnb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>\-->
                </div>
            </div>
        </nav>
    <div class="container mt-5">

    <h1>You picked <!-- enter neighborhood name here --></h1>


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <!-- put html images code here -->






        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>