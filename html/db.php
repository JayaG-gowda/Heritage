<?php

$DBserver = 'localhost';
$DBuname = 'root';
$DBpass = '';
$DBname = 'heritage';

$con = mysqli_connect($DBserver, $DBuname, $DBpass, $DBname);

if (!$con) {
    die("Database connection failuer! " + $con);
}

?>