<?php
include 'conexion.php';

// Validar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
