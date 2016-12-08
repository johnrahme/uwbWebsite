<?php

//Server
//$link = mysqli_connect("rerun","potiro","pcXZb(kL", "poti");
//$link = mysqli_connect("localhost","root","", "uwb");

//Server connection
$link = mysqli_connect("mysql525.loopia.se","john@f160124","6EAUbs6sdCYb", "futf_se_db_2");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>