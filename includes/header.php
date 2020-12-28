<?php 
    require "core/config.php";
    //require_once "core/app.php";
    require_once "core/functions.php";
    require_once "classes/dbh.class.php";
    require_once "classes/test.class.php"; 
    
?>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
	<body>

        <div class="headline">
            <img class="logo" src="https://picsum.photos/110/60" alt="logo" />
            Debrecen Food Factory
        </div>
        <nav class="navbar navbar-expand-1g navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="asztalok.php">Asztalok</a>
            <a class="navbar-brand" href="etelek.php">Ételek</a>
            <a class="navbar-brand" href="pincerek.php">Pincérek</a>
        </nav>
        <main class="container">