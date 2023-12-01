<?php

$conn = new mysqli("localhost", "root", "", "integrador_cac");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM oradores";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de la Tabla</title>
</head>
<body>

<h2>Registros de la Tabla</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tema</th>
        <th>Fecha de Alta</th>
    </tr>
    <?php

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['tema'] . "</td>";
            echo "<td>" . $row['fecha_alta'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay registros en la tabla</td></tr>";
    }

    $conn->close();
    ?>
</table>
</body>
</html>