<?php

header( "refresh:3;url=http://www.ablwebprog2.nhely.hu/etelek.php" );



$host = "localhost";
$user = "almasi91";
$pwd = "Blint25468";
$Name = "almasi91";

$conn = mysqli_connect($host,$user,$pwd,$Name);

 
// Escape user inputs for security
$megnevezes = mysqli_real_escape_string($conn, $_REQUEST['megnevezes']);
$kategoria = mysqli_real_escape_string($conn, $_REQUEST['kategoria']);
$ertek = mysqli_real_escape_string($conn, $_REQUEST['ertek']);
 
// Attempt insert query execution
$sql = "INSERT INTO termekek (megnevezes, kategoria, ertek) VALUES ('$megnevezes', '$kategoria', '$ertek');";
if(mysqli_query($conn, $sql)){
    echo $megnevezes. " sikeresen hozzáadva!";
} else{
    echo "ERROR: $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

