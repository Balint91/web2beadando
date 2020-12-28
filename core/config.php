<?php

$host = "localhost";
$user = "almasi91";
$pwd = "Blint25468";
$Name = "almasi91";

$conn = mysqli_connect($host,$user,$pwd,$Name);

if($conn === false) {
    die("ERROR: Cloud not connect." . mysqli_connect_error());
}





/*
$config = [
    'db_host' => 'https://mysqladmin.nethely.hu/',
    'db_name' => 'almasi91',
    'db_user' => 'almasi91',
    'db_pass' => 'valami',
];*/