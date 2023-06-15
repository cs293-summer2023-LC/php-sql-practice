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




function getNeighborhoods($db){
    try {
        $stmt = $db->prepare("select * from neighborhoods order by neighborhood asc limit 5");
        
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    catch (Exception $e) {
        
        echo $e;
    }

    return $rows;

}
function getNeighborhoodListing($db, $neighborhoodId){
    try {
        $stmt = $db->prepare("select name, pictureUrl from listings 
                            join neighborhoods on neighborhoods.id = listings.neighborhoodId
                            where neighborhoods.id=:neighborhoodId 
                            limit 1  
                            ");
        
        $stmt->execute(array(":neighborhoodId"=>$neighborhoodId));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    catch (Exception $e) {
        
        echo $e;
    }

    return $rows;

}






?>