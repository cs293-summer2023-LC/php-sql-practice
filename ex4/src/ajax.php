<?php

include("functions.php");

$db=dbConnect();

$neighborhoodId=$_GET["neighborhoodId"];



$row=getNeighborhoodListing($db, $neighborhoodId);
echo json_encode($row);



?>