<?php
$servername = "remotemysql.com";
$username = "gu8PPuXHnZ";
$password = "y4j8JOQhdu";
$database= "gu8PPuXHnZ";


$conn =  @ mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexiune nereusita: " . mysqli_connect_error());
}
?>
