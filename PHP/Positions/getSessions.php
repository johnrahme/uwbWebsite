<?php
include '../db_connect.php';
global $link;
//$position_query = "select x,y from positions where sessionId = ".$id;
// for now just get the latest run
$position_query = "select sessions.id,sessions.startedAt,places.name,places.url,places.width,places.height, places.coordAX,places.coordAY,places.coordBX,places.coordBY,places.coordCX,places.coordCY from sessions inner join places on sessions.placeId = places.id  order by sessions.id desc limit 5" ;
$result = mysqli_query($link, $position_query);


$num_rows = mysqli_num_rows($result);

if($num_rows>0){
    $emparray = array();
    while($a_row = mysqli_fetch_assoc   ($result)){
        $emparray[] = $a_row;

    }
    echo json_encode($emparray);
}