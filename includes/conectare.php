<?php
$servername = "sql5.freesqldatabase.com";
$username = "sql5425562";
$password = "xLGpuw9KTR";
$database= "sql5425562";


$conn =  @ mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexiune nereusita: " . mysqli_connect_error());
}
?>
