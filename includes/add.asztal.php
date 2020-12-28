<?php

header( "refresh:3;url=http://www.ablwebprog2.nhely.hu/asztalok.php" );

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
$asztal = mysqli_real_escape_string($conn, $_REQUEST['asztal']);
$nev = mysqli_real_escape_string($conn, $_REQUEST['nev']);
 
// Attempt insert query execution
$sql = "INSERT INTO seged (asztal_nev, nev) VALUES ('$asztal', '$nev');";
if(mysqli_query($conn, $sql)){
    echo $asztal. "-hez pincérünk: ".$nev. " sikeresen hozzáadva!";
} else{
    echo "ERROR: $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

