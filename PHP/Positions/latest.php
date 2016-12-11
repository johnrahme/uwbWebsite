<?php
include '../db_connect.php';
global $link;
	$position_query = "select x,y,sessionId from positions ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($link, $position_query);


	$num_rows = mysqli_num_rows($result);

	if($num_rows>0){
        $emparray = array();
		while($a_row = mysqli_fetch_assoc   ($result)){
			$emparray[] = $a_row;

            $session_query = "select placeId from sessions where id = ".$a_row["sessionId"];
            $session_result = mysqli_query($link, $session_query);
            $session_row = mysqli_fetch_assoc($session_result);

            $place_query = "select width, height from places where id = ".$session_row["placeId"];
            $place_result = mysqli_query($link, $place_query);
            $place_row = mysqli_fetch_assoc($place_result);

            $emparray[] = $place_row;

		}
        echo json_encode($emparray);
	}
?>