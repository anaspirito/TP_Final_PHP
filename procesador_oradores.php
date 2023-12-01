<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "integrador_cac";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$tema = $_POST['tema'];


        $sql = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) 
        VALUES ('$nombre', '$apellido', '$mail', '$tema', NOW())";
        

if ($conn->query($sql) === TRUE) {
    echo "Registro ingresado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
