<?php
include '../db_connect.php';
global $link;
	$query_string = "select x,y from positions ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($link, $query_string);


	$num_rows = mysqli_num_rows($result);

	if($num_rows>0){
		while($a_row = mysqli_fetch_row($result)){
			foreach ($a_row as $key => $field) {
				echo " $field ";
			}
		}
	}
?>