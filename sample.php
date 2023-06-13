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


/* query with no SQL arguments */
function getAllListings($db){
    try {
        $stmt = $db->prepare("select * from listings");   
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    
    }
    catch (Exception $e) {
        echo $e;
    }
    
}


/* query with one SQL argument */
function getListingsBelowPrice($db, $price){
    echo $num;
    try {
        $stmt = $db->prepare("select * from listings where price< :price order by price desc");   
        $stmt->bindParam(':price',$price);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    
    }
    catch (Exception $e) {
        echo $e;
    }
    
}

/* query with one SQL argument */
function getListingsByNeighborhoodIdAndMaxPrice($db, $neighborhoodId, $price){
    try {
        $stmt = $db->prepare("select * from listings
        join neighborhoods  on neighborhoods.id=listings.neighborhoodId 
        where listings.price <= :price and neighborhoods.id = :neighborhoodId 
        order by listings.price desc  
        limit 5       
        ");   
        $stmt->execute(array(":price"=>$price, ":neighborhoodId"=>$neighborhoodId));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        /** see the resulting array **/
        var_dump($rows);
    
        /** loop through the rows: **/
        foreach ($rows as $row){
            $id=$row["id"];
            $name=$row["name"];
            $price=$row["price"];

            echo "<p>id: $id, name: $name, price: $price</p>";
        }
    
    }
    catch (Exception $e) {
        echo $e;
    }
    
}

//get database connection
$db=dbConnect();

//get everything from listings table
//$rows=getAllListings($db);
//var_dump($rows);

//get x number of listings
$price=150;
//$rows=getListingsBelowPrice($db, $price);
//var_dump($rows);

// get listings from neighborhood (given id) and max price (given price)
$neighborhoodId=22; //Eastmoreland
$price=100;
//$rows=getListingsByNeighborhoodIdAndMaxPrice($db, $neighborhoodId, $price);
//var_dump($rows);



?>