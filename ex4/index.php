<?php

/* 

Exercise 4: Using AJAX with with PHP & MySQL

1. In src/functions.php, write a PHP function that gets
5 neighborhood names and ids, sorted alphabetically by neighborhood.


2. Put neighborhood each in paragraph, with neighborhoods.id as the 
paragraph's id attribute, and class='hoods'. 

e.g.
<p id='47' class='hoods'>Alameda</p>
...


3. Write javascript in js/script.js that:
-creates a 'click' event listener on .hoods
-when clicked, get the id attribute
-write jQuery AJAX to send the id to src/ajax.php via GET
-parse the response, and put it in <div id="result"></div>

4. In src/ajax.php, receive the GET id from the AJAX call. Call a function
in functions.php to get the name and pictureUrl from one listing in the 
nieghborhood clicked. Return the response to index.php from src/ajax.php 
with echo json_encode($rows).


5. Parse the results, using JSON.parse(response), then get the name and pictureUrl.
Create html:
<<p>Name goes here</p><img src='pictureURL goes here'>
and put it in <div id="results">


*/


include("src/functions.php");
$db=dbConnect();
$neighborhoods=getNeighborhoods($db);

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
    <style>
      .hood{color:blue;cursor:pointer;}
      img{width:300px;}
      </style>
  </head>
  <body>
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Fake Airbnb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </div>
            </div>
        </nav>
    <div class="container mt-5">

        <h1>Select neighborhood:</h1>
        <div class="row">
            <div class="col-6">

            <?php

            foreach($neighborhoods as $n){
              $id=$n["id"];
              $hood=$n["neighborhood"];

              echo "<p id='$id' class='hood'>$hood</p>";



            }

            //var_dump($neighborhoods);

            ?>



            </div>

            <div class="col-6" id="result">
              
              
                


            </div>






        </div>
         





    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>


  </body>
</html>