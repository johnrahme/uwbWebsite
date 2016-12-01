<?php

$title;
//Server
//$baseDir = "/~jorahme/public_html";
$baseDir = "/uwbWebsite";
$active;
$rootPath;

function setup($titleSet, $activeSet, $upPath) {
    session_start();
    global $title, $baseDir,$active, $rootPath;
    $title = $titleSet;
    $active = $activeSet;
    $rootPath= "".$upPath;
}

?>