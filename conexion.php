<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dht11test";

// Creamos la conexión
$con = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($con, "utf8");

// Verificamos la conexión
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
} else {
    // echo "Conexión exitosa";
}
?>