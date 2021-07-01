<?php
$servername = "localhost";
$username = "aleflo80_meakex";
$password = "Alexandru2020@";
$database= "aleflo80_meakex";


$conn =  @ mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexiune nereusita: " . mysqli_connect_error());
}
?>