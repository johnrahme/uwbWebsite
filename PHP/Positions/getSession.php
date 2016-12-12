<?php
include '../db_connect.php';
global $link;
$id = $_POST['id'];
$position_query = "select x,y from positions where sessionId = ".$id;
$result = mysqli_query($link, $position_query);


$num_rows = mysqli_num_rows($result);

if($num_rows>0){
    $emparray = array();
    while($a_row = mysqli_fetch_assoc   ($result)){
        $emparray[] = $a_row;

    }
    echo json_encode($emparray);
}