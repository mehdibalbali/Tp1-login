<?php

$dbhost = "localhost";
$dbuser = "mehdibalbali";
$dbpass = "mehdi";
$dbname = "login_db";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    
    die("failed to connect!");

    }