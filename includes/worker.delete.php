<?php

header( "refresh:3;url=http://www.ablwebprog2.nhely.hu/pincerek.php" );

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host = "localhost";
$user = "almasi91";
$pwd = "Blint25468";
$Name = "almasi91";

$conn = mysqli_connect($host,$user,$pwd,$Name);

if($conn === false) {
    die("ERROR: " . mysqli_connect_error());
}

 
// Check connection
if($conn === false){
    die("ERROR: " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);

// Attempt insert query execution
$sql = "DELETE FROM `pincerek` WHERE `pincerek`.`nev` = '$first_name';";
if(mysqli_query($conn, $sql)){
    echo $first_name. " sikeresen eltávolítva!";
} else{
    echo "ERROR: $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
