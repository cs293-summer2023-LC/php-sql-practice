<?php

function dbConnect(){
    /*** connection credentials *******/
    $servername = "localhost";
    $username = "fakeAirbnbUser";
    $password = "apples10Million!";
    $database = "fakeAirbnb";
    $dbport = 3306;
    /****** connect to database **************/

    try {
        $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4;port=$dbport", $username, $password);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    return $db;
}







?>