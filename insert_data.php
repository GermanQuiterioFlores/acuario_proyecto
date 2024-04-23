<?php
$servername = "localhost";
$username = "id22058191_german";
$password = "GermanPro24042018!";
$dbname = "id22058191_german";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$humidity = $_POST['humidity']; // Obtén el valor de humedad desde la solicitud POST
$temperature = $_POST['temperature']; // Obtén el valor de temperatura desde la solicitud POST

$sql = "INSERT INTO data (humidity, temperature) VALUES ('$humidity', '$temperature')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
?>
